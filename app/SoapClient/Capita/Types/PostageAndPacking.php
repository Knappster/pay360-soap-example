<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class PostageAndPacking
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData $pnpSummary;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem $tax = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\LgPnpDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\LgPnpDetails $lgPnpDetails = null;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData
     */
    public function getPnpSummary() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData
    {
        return $this->pnpSummary;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData $pnpSummary
     * @return static
     */
    public function withPnpSummary(\Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData $pnpSummary) : static
    {
        $new = clone $this;
        $new->pnpSummary = $pnpSummary;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem
     */
    public function getTax() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem
    {
        return $this->tax;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem $tax
     * @return static
     */
    public function withTax(?\Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem $tax) : static
    {
        $new = clone $this;
        $new->tax = $tax;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\LgPnpDetails
     */
    public function getLgPnpDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\LgPnpDetails
    {
        return $this->lgPnpDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\LgPnpDetails $lgPnpDetails
     * @return static
     */
    public function withLgPnpDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\LgPnpDetails $lgPnpDetails) : static
    {
        $new = clone $this;
        $new->lgPnpDetails = $lgPnpDetails;

        return $new;
    }
}

