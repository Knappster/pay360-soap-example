<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class StoreCardResult
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\Status
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\Status $status;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardDetails $storedCardDetails = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails $errorDetails = null;

    /**
     * @var null | string
     */
    private ?string $isoCountryCode = null;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails $securityDetails;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\Status
     */
    public function getStatus() : \Knappster\CapitaPay360\SoapClient\Capita\Types\Status
    {
        return $this->status;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\Status $status
     * @return static
     */
    public function withStatus(\Knappster\CapitaPay360\SoapClient\Capita\Types\Status $status) : static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardDetails
     */
    public function getStoredCardDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardDetails
    {
        return $this->storedCardDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardDetails $storedCardDetails
     * @return static
     */
    public function withStoredCardDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardDetails $storedCardDetails) : static
    {
        $new = clone $this;
        $new->storedCardDetails = $storedCardDetails;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails
     */
    public function getErrorDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails $errorDetails
     * @return static
     */
    public function withErrorDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails $errorDetails) : static
    {
        $new = clone $this;
        $new->errorDetails = $errorDetails;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIsoCountryCode() : ?string
    {
        return $this->isoCountryCode;
    }

    /**
     * @param null | string $isoCountryCode
     * @return static
     */
    public function withIsoCountryCode(?string $isoCountryCode) : static
    {
        $new = clone $this;
        $new->isoCountryCode = $isoCountryCode;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails
     */
    public function getSecurityDetails() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails
    {
        return $this->securityDetails;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails $securityDetails
     * @return static
     */
    public function withSecurityDetails(\Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails $securityDetails) : static
    {
        $new = clone $this;
        $new->securityDetails = $securityDetails;

        return $new;
    }
}

