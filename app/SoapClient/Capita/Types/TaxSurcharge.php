<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class TaxSurcharge
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\VatSurcharge
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\VatSurcharge $vat = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\VatSurcharge
     */
    public function getVat() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\VatSurcharge
    {
        return $this->vat;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\VatSurcharge $vat
     * @return static
     */
    public function withVat(?\Knappster\CapitaPay360\SoapClient\Capita\Types\VatSurcharge $vat) : static
    {
        $new = clone $this;
        $new->vat = $vat;

        return $new;
    }
}

