<?php

declare(strict_types=1);

namespace Knappster\CapitaPay360\Services;

use Knappster\CapitaPay360\SoapClient\Capita\CapitaClient;
use Knappster\CapitaPay360\SoapClient\Capita\CapitaClientFactory;
use Knappster\CapitaPay360\SoapClient\Capita\Types\Algorithm;
use Knappster\CapitaPay360\SoapClient\Capita\Types\BillingDetails;
use Knappster\CapitaPay360\SoapClient\Capita\Types\CardHolderDetails;
use Knappster\CapitaPay360\SoapClient\Capita\Types\Contact;
use Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials;
use Knappster\CapitaPay360\SoapClient\Capita\Types\InvokeResult;
use Knappster\CapitaPay360\SoapClient\Capita\Types\PanEntryMethod;
use Knappster\CapitaPay360\SoapClient\Capita\Types\RequestIdentification;
use Knappster\CapitaPay360\SoapClient\Capita\Types\RequestType;
use Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseVersion;
use Knappster\CapitaPay360\SoapClient\Capita\Types\Routing;
use Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleInvokeRequest;
use Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleQueryRequest;
use Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleQueryResponse;
use Knappster\CapitaPay360\SoapClient\Capita\Types\ScpVersionRequest;
use Knappster\CapitaPay360\SoapClient\Capita\Types\ScpVersionResponse;
use Knappster\CapitaPay360\SoapClient\Capita\Types\Signature;
use Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePaymentResult;
use Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSale;
use Knappster\CapitaPay360\SoapClient\Capita\Types\Subject;
use Knappster\CapitaPay360\SoapClient\Capita\Types\SubjectType;
use Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData;
use Knappster\CapitaPay360\SoapClient\Capita\Types\SystemCode;
use Ramsey\Uuid\Uuid;

class Soap
{
    /** @var non-empty-string */
    protected string $wsdl;
    protected string $url;
    protected string $siteId;
    protected string $scpId;
    protected string $hmacKeyId;
    protected string $hmacKey;
    protected string $uuid;

    public function __construct()
    {
        $this->wsdl = $_ENV['WSDL'];
        $this->url = $_ENV['URL'];
        $this->siteId = $_ENV['SITE_ID'];
        $this->scpId = $_ENV['SCP_ID'];
        $this->hmacKeyId = $_ENV['HMAC_KEY_ID'];
        $this->hmacKey = $_ENV['HMAC_KEY'];
        $this->uuid = Uuid::uuid4()->toString();
    }

    protected function getDigest(string $timestamp): string
    {
        $credentials = [
            'CapitaPortal',
            $this->scpId,
            $this->uuid,
            $timestamp,
            'Original',
            $this->hmacKeyId,
        ];

        $key = base64_decode($this->hmacKey);
        $hash = hash_hmac('sha256', implode('!', $credentials), $key, true);

        return base64_encode($hash);
    }

    protected function getTimestamp(): string
    {
        return gmdate('YmdHis');
    }

    protected function getCredentials(): Credentials
    {
        $timestamp = $this->getTimestamp();
        $digest = $this->getDigest($timestamp);

        $subject = new Subject()
            ->withSubjectType(SubjectType::CapitaPortal)
            ->withIdentifier((int) $this->scpId)
            ->withSystemCode(SystemCode::SCP);

        $requestIdentification = new RequestIdentification()
            ->withUniqueReference($this->uuid)
            ->withTimeStamp($timestamp);

        $signature = new Signature()
            ->withAlgorithm(Algorithm::Original)
            ->withHmacKeyID((int) $this->hmacKeyId)
            ->withDigest($digest);

        $credentials = new Credentials()
            ->withSubject($subject)
            ->withRequestIdentification($requestIdentification)
            ->withSignature($signature);

        return $credentials;
    }

    protected function createScpService(): CapitaClient
    {
        $client = CapitaClientFactory::factory($this->wsdl);

        return $client;
    }

    protected function createScpVersionRequest(): ScpVersionRequest
    {
        return new ScpVersionRequest()
            ->withCredentials($this->getCredentials());
    }

    protected function createScpSimpleInvokeRequest(): ScpSimpleInvokeRequest
    {
        // Amount in minor units: 123.45 -> 12345
        $amount = (int) number_format(3.50, 2, '', '');

        $routing = new Routing()
            ->withReturnUrl($this->url . '/app/check-payment?payment_id=' . $this->uuid)
            ->withSiteId((int) $this->siteId)
            ->withScpId((int) $this->scpId)
            ->withBackUrl($this->url . '/payment');

        $summaryData = new SummaryData()
            ->withDescription('Lochness Monster')
            ->withAmountInMinorUnits($amount)
            ->withReference('Chef');

        $simpleSale = new SimpleSale()
            ->withSaleSummary($summaryData);

        $request = new ScpSimpleInvokeRequest($simpleSale)
            ->withCredentials($this->getCredentials())
            ->withRequestType(RequestType::payOnly)
            ->withRequestId($this->uuid)
            ->withRouting($routing)
            ->withPanEntryMethod(PanEntryMethod::ECOM);

        $contact = new Contact()->withEmail('chef@southpark.com');
        $cardHolderDetails = new CardHolderDetails()->withContact($contact);
        $billingDetails = new BillingDetails()->withCardHolderDetails($cardHolderDetails);

        $request->withBilling($billingDetails);

        return $request;
    }

    /**
     * Create SCP query request.
     */
    private function createScpQueryRequest(string $scpReference): ScpSimpleQueryRequest
    {
        $request = new ScpSimpleQueryRequest(
            credentials: $this->getCredentials(),
            siteId: (int) $this->siteId,
            scpReference: $scpReference,
            acceptNonCardResponseData: null,
            responseVersion: ResponseVersion::Value_132
        );

        return $request;
    }

    public function getScpVersion(): ScpVersionResponse
    {
        $request = $this->createScpVersionRequest();
        $client = $this->createScpService();

        return $client->scpVersion($request);
    }

    public function getScpSimpleInvoke(): InvokeResult
    {
        $client = $this->createScpService();
        $request = $this->createScpSimpleInvokeRequest();
        $response = $client->scpSimpleInvoke($request);
        $result = $response->getInvokeResult();

        return $result;
    }

    public function getScpSimpleQuery(): ScpSimpleQueryResponse
    {
        $client = $this->createScpService();
        $request = $this->createScpQueryRequest('dummy_reference');
        $response = $client->scpSimpleQuery($request);

        return $response;
    }
}
