<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class AdditionalInstructions
{
    /**
     * @var null | string
     */
    private ?string $merchantCode = null;

    /**
     * Three digit ISO code
     *
     * @var null | string
     */
    private ?string $countryCode = null;

    /**
     * Three digit ISO code
     *
     * @var null | string
     */
    private ?string $currencyCode = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCards
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCards $acceptedCards = null;

    /**
     * @var null | string
     */
    private ?string $language = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StageIndicator
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\StageIndicator $stageIndicator = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseInterface
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseInterface $responseInterface = null;

    /**
     * @var null | string
     */
    private ?string $cardholderID = null;

    /**
     * @var null | int
     */
    private ?int $integrator = null;

    /**
     * @var null | string
     */
    private ?string $styleCode = null;

    /**
     * @var null | string
     */
    private ?string $frameworkCode = null;

    /**
     * @var null | string
     */
    private ?string $systemCode = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\WalletRequest
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\WalletRequest $walletRequest = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\RecurringPayments
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\RecurringPayments $recurringPayments = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethods
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethods $paymentMethods = null;

    /**
     * @return null | string
     */
    public function getMerchantCode() : ?string
    {
        return $this->merchantCode;
    }

    /**
     * @param null | string $merchantCode
     * @return static
     */
    public function withMerchantCode(?string $merchantCode) : static
    {
        $new = clone $this;
        $new->merchantCode = $merchantCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }

    /**
     * @param null | string $countryCode
     * @return static
     */
    public function withCountryCode(?string $countryCode) : static
    {
        $new = clone $this;
        $new->countryCode = $countryCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCurrencyCode() : ?string
    {
        return $this->currencyCode;
    }

    /**
     * @param null | string $currencyCode
     * @return static
     */
    public function withCurrencyCode(?string $currencyCode) : static
    {
        $new = clone $this;
        $new->currencyCode = $currencyCode;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCards
     */
    public function getAcceptedCards() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCards
    {
        return $this->acceptedCards;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCards $acceptedCards
     * @return static
     */
    public function withAcceptedCards(?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCards $acceptedCards) : static
    {
        $new = clone $this;
        $new->acceptedCards = $acceptedCards;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLanguage() : ?string
    {
        return $this->language;
    }

    /**
     * @param null | string $language
     * @return static
     */
    public function withLanguage(?string $language) : static
    {
        $new = clone $this;
        $new->language = $language;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StageIndicator
     */
    public function getStageIndicator() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\StageIndicator
    {
        return $this->stageIndicator;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StageIndicator $stageIndicator
     * @return static
     */
    public function withStageIndicator(?\Knappster\CapitaPay360\SoapClient\Capita\Types\StageIndicator $stageIndicator) : static
    {
        $new = clone $this;
        $new->stageIndicator = $stageIndicator;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseInterface
     */
    public function getResponseInterface() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseInterface
    {
        return $this->responseInterface;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseInterface $responseInterface
     * @return static
     */
    public function withResponseInterface(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseInterface $responseInterface) : static
    {
        $new = clone $this;
        $new->responseInterface = $responseInterface;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCardholderID() : ?string
    {
        return $this->cardholderID;
    }

    /**
     * @param null | string $cardholderID
     * @return static
     */
    public function withCardholderID(?string $cardholderID) : static
    {
        $new = clone $this;
        $new->cardholderID = $cardholderID;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getIntegrator() : ?int
    {
        return $this->integrator;
    }

    /**
     * @param null | int $integrator
     * @return static
     */
    public function withIntegrator(?int $integrator) : static
    {
        $new = clone $this;
        $new->integrator = $integrator;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStyleCode() : ?string
    {
        return $this->styleCode;
    }

    /**
     * @param null | string $styleCode
     * @return static
     */
    public function withStyleCode(?string $styleCode) : static
    {
        $new = clone $this;
        $new->styleCode = $styleCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getFrameworkCode() : ?string
    {
        return $this->frameworkCode;
    }

    /**
     * @param null | string $frameworkCode
     * @return static
     */
    public function withFrameworkCode(?string $frameworkCode) : static
    {
        $new = clone $this;
        $new->frameworkCode = $frameworkCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSystemCode() : ?string
    {
        return $this->systemCode;
    }

    /**
     * @param null | string $systemCode
     * @return static
     */
    public function withSystemCode(?string $systemCode) : static
    {
        $new = clone $this;
        $new->systemCode = $systemCode;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\WalletRequest
     */
    public function getWalletRequest() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\WalletRequest
    {
        return $this->walletRequest;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\WalletRequest $walletRequest
     * @return static
     */
    public function withWalletRequest(?\Knappster\CapitaPay360\SoapClient\Capita\Types\WalletRequest $walletRequest) : static
    {
        $new = clone $this;
        $new->walletRequest = $walletRequest;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\RecurringPayments
     */
    public function getRecurringPayments() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\RecurringPayments
    {
        return $this->recurringPayments;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\RecurringPayments $recurringPayments
     * @return static
     */
    public function withRecurringPayments(?\Knappster\CapitaPay360\SoapClient\Capita\Types\RecurringPayments $recurringPayments) : static
    {
        $new = clone $this;
        $new->recurringPayments = $recurringPayments;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethods
     */
    public function getPaymentMethods() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethods
    {
        return $this->paymentMethods;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethods $paymentMethods
     * @return static
     */
    public function withPaymentMethods(?\Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethods $paymentMethods) : static
    {
        $new = clone $this;
        $new->paymentMethods = $paymentMethods;

        return $new;
    }
}

