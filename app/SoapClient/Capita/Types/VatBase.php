<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class VatBase
{
    /**
     * @var null | string
     */
    private ?string $vatCode = null;

    /**
     * @var float
     */
    private float $vatRate;

    /**
     * @return null | string
     */
    public function getVatCode() : ?string
    {
        return $this->vatCode;
    }

    /**
     * @param null | string $vatCode
     * @return static
     */
    public function withVatCode(?string $vatCode) : static
    {
        $new = clone $this;
        $new->vatCode = $vatCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getVatRate() : float
    {
        return $this->vatRate;
    }

    /**
     * @param float $vatRate
     * @return static
     */
    public function withVatRate(float $vatRate) : static
    {
        $new = clone $this;
        $new->vatRate = $vatRate;

        return $new;
    }
}

