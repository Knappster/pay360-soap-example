<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class TaxItem
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\VatItem
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\VatItem $vat = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\VatItem
     */
    public function getVat() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\VatItem
    {
        return $this->vat;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\VatItem $vat
     * @return static
     */
    public function withVat(?\Knappster\CapitaPay360\SoapClient\Capita\Types\VatItem $vat) : static
    {
        $new = clone $this;
        $new->vat = $vat;

        return $new;
    }
}

