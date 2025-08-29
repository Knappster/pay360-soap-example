<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SaleBase
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData $saleSummary;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ContactDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ContactDetails $deliveryDetails = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\LgSaleDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\LgSaleDetails $lgSaleDetails = null;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData
     */
    public function getSaleSummary() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData
    {
        return $this->saleSummary;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData $saleSummary
     * @return static
     */
    public function withSaleSummary(\Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData $saleSummary) : static
    {
        $new = clone $this;
        $new->saleSummary = $saleSummary;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ContactDetails
     */
    public function getDeliveryDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ContactDetails
    {
        return $this->deliveryDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ContactDetails $deliveryDetails
     * @return static
     */
    public function withDeliveryDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ContactDetails $deliveryDetails) : static
    {
        $new = clone $this;
        $new->deliveryDetails = $deliveryDetails;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\LgSaleDetails
     */
    public function getLgSaleDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\LgSaleDetails
    {
        return $this->lgSaleDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\LgSaleDetails $lgSaleDetails
     * @return static
     */
    public function withLgSaleDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\LgSaleDetails $lgSaleDetails) : static
    {
        $new = clone $this;
        $new->lgSaleDetails = $lgSaleDetails;

        return $new;
    }
}

