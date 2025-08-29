<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class CardSurchargeRate
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardType
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardType $surchargeCardType = null;

    /**
     * At least one of surchargeFixed and/or surchargeRate
     *  is required
     *
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis $surchargeBasis;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardType
     */
    public function getSurchargeCardType() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardType
    {
        return $this->surchargeCardType;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardType $surchargeCardType
     * @return static
     */
    public function withSurchargeCardType(?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardType $surchargeCardType) : static
    {
        $new = clone $this;
        $new->surchargeCardType = $surchargeCardType;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis
     */
    public function getSurchargeBasis() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis
    {
        return $this->surchargeBasis;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis $surchargeBasis
     * @return static
     */
    public function withSurchargeBasis(\Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis $surchargeBasis) : static
    {
        $new = clone $this;
        $new->surchargeBasis = $surchargeBasis;

        return $new;
    }
}

