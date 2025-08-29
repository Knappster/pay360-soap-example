<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ScpInvokeRequest extends RequestWithCredentials
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestType
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestType $requestType;

    /**
     * @var string
     */
    private string $requestId;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\Routing
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\Routing $routing;

    /**
     * ECOM - E-Commerce (Default)
     * CNP - Card Not Present
     *
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\PanEntryMethod
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\PanEntryMethod $panEntryMethod;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AdditionalInstructions
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AdditionalInstructions $additionalInstructions = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\BillingDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\BillingDetails $billing = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\NonPaymentData
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\NonPaymentData $nonPaymentData = null;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestType
     */
    public function getRequestType() : \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestType
    {
        return $this->requestType;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestType $requestType
     * @return static
     */
    public function withRequestType(\Knappster\CapitaPay360\SoapClient\Capita\Types\RequestType $requestType) : static
    {
        $new = clone $this;
        $new->requestType = $requestType;

        return $new;
    }

    /**
     * @return string
     */
    public function getRequestId() : string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return static
     */
    public function withRequestId(string $requestId) : static
    {
        $new = clone $this;
        $new->requestId = $requestId;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\Routing
     */
    public function getRouting() : \Knappster\CapitaPay360\SoapClient\Capita\Types\Routing
    {
        return $this->routing;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\Routing $routing
     * @return static
     */
    public function withRouting(\Knappster\CapitaPay360\SoapClient\Capita\Types\Routing $routing) : static
    {
        $new = clone $this;
        $new->routing = $routing;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\PanEntryMethod
     */
    public function getPanEntryMethod() : \Knappster\CapitaPay360\SoapClient\Capita\Types\PanEntryMethod
    {
        return $this->panEntryMethod;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\PanEntryMethod $panEntryMethod
     * @return static
     */
    public function withPanEntryMethod(\Knappster\CapitaPay360\SoapClient\Capita\Types\PanEntryMethod $panEntryMethod) : static
    {
        $new = clone $this;
        $new->panEntryMethod = $panEntryMethod;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AdditionalInstructions
     */
    public function getAdditionalInstructions() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AdditionalInstructions
    {
        return $this->additionalInstructions;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AdditionalInstructions $additionalInstructions
     * @return static
     */
    public function withAdditionalInstructions(?\Knappster\CapitaPay360\SoapClient\Capita\Types\AdditionalInstructions $additionalInstructions) : static
    {
        $new = clone $this;
        $new->additionalInstructions = $additionalInstructions;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\BillingDetails
     */
    public function getBilling() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\BillingDetails
    {
        return $this->billing;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\BillingDetails $billing
     * @return static
     */
    public function withBilling(?\Knappster\CapitaPay360\SoapClient\Capita\Types\BillingDetails $billing) : static
    {
        $new = clone $this;
        $new->billing = $billing;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\NonPaymentData
     */
    public function getNonPaymentData() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\NonPaymentData
    {
        return $this->nonPaymentData;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\NonPaymentData $nonPaymentData
     * @return static
     */
    public function withNonPaymentData(?\Knappster\CapitaPay360\SoapClient\Capita\Types\NonPaymentData $nonPaymentData) : static
    {
        $new = clone $this;
        $new->nonPaymentData = $nonPaymentData;

        return $new;
    }
}

