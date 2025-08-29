<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class VatItem extends VatBase
{
    /**
     * Amount in minor currency units(pence/cents), leading sign
     *
     * @var int
     */
    private int $vatAmountInMinorUnits;

    /**
     * @return int
     */
    public function getVatAmountInMinorUnits() : int
    {
        return $this->vatAmountInMinorUnits;
    }

    /**
     * @param int $vatAmountInMinorUnits
     * @return static
     */
    public function withVatAmountInMinorUnits(int $vatAmountInMinorUnits) : static
    {
        $new = clone $this;
        $new->vatAmountInMinorUnits = $vatAmountInMinorUnits;

        return $new;
    }
}

