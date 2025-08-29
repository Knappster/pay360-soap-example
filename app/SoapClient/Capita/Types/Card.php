<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Card
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardDetails $cardDetails = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey $storedCardKey = null;

    /**
     * @var null | string
     */
    private ?string $paymentGroupCode = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDetails
     */
    public function getCardDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardDetails
    {
        return $this->cardDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDetails $cardDetails
     * @return static
     */
    public function withCardDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardDetails $cardDetails) : static
    {
        $new = clone $this;
        $new->cardDetails = $cardDetails;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey
     */
    public function getStoredCardKey() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey
    {
        return $this->storedCardKey;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey $storedCardKey
     * @return static
     */
    public function withStoredCardKey(?\Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey $storedCardKey) : static
    {
        $new = clone $this;
        $new->storedCardKey = $storedCardKey;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPaymentGroupCode() : ?string
    {
        return $this->paymentGroupCode;
    }

    /**
     * @param null | string $paymentGroupCode
     * @return static
     */
    public function withPaymentGroupCode(?string $paymentGroupCode) : static
    {
        $new = clone $this;
        $new->paymentGroupCode = $paymentGroupCode;

        return $new;
    }
}

