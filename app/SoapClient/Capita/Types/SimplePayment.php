<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SimplePayment extends PaymentBase
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSaleSummary
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSaleSummary $saleSummary;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeDetails $surchargeDetails = null;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSaleSummary
     */
    public function getSaleSummary() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSaleSummary
    {
        return $this->saleSummary;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSaleSummary $saleSummary
     * @return static
     */
    public function withSaleSummary(\Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSaleSummary $saleSummary) : static
    {
        $new = clone $this;
        $new->saleSummary = $saleSummary;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeDetails
     */
    public function getSurchargeDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeDetails
    {
        return $this->surchargeDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeDetails $surchargeDetails
     * @return static
     */
    public function withSurchargeDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeDetails $surchargeDetails) : static
    {
        $new = clone $this;
        $new->surchargeDetails = $surchargeDetails;

        return $new;
    }
}

