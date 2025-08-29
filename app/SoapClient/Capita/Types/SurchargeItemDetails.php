<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SurchargeItemDetails
{
    /**
     * @var null | string
     */
    private ?string $fundCode = null;

    /**
     * @var null | string
     */
    private ?string $reference = null;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeInfo
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeInfo $surchargeInfo;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\TaxSurcharge
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\TaxSurcharge $tax = null;

    /**
     * @return null | string
     */
    public function getFundCode() : ?string
    {
        return $this->fundCode;
    }

    /**
     * @param null | string $fundCode
     * @return static
     */
    public function withFundCode(?string $fundCode) : static
    {
        $new = clone $this;
        $new->fundCode = $fundCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getReference() : ?string
    {
        return $this->reference;
    }

    /**
     * @param null | string $reference
     * @return static
     */
    public function withReference(?string $reference) : static
    {
        $new = clone $this;
        $new->reference = $reference;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeInfo
     */
    public function getSurchargeInfo() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeInfo
    {
        return $this->surchargeInfo;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeInfo $surchargeInfo
     * @return static
     */
    public function withSurchargeInfo(\Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeInfo $surchargeInfo) : static
    {
        $new = clone $this;
        $new->surchargeInfo = $surchargeInfo;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\TaxSurcharge
     */
    public function getTax() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\TaxSurcharge
    {
        return $this->tax;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\TaxSurcharge $tax
     * @return static
     */
    public function withTax(?\Knappster\CapitaPay360\SoapClient\Capita\Types\TaxSurcharge $tax) : static
    {
        $new = clone $this;
        $new->tax = $tax;

        return $new;
    }
}

