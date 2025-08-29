<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SurchargeBasis
{
    /**
     * Amount in minor currency units(pence/cents)
     *
     * @var null | int
     */
    private ?int $surchargeFixed = null;

    /**
     * @var null | float
     */
    private ?float $surchargeRate = null;

    /**
     * @return null | int
     */
    public function getSurchargeFixed() : ?int
    {
        return $this->surchargeFixed;
    }

    /**
     * @param null | int $surchargeFixed
     * @return static
     */
    public function withSurchargeFixed(?int $surchargeFixed) : static
    {
        $new = clone $this;
        $new->surchargeFixed = $surchargeFixed;

        return $new;
    }

    /**
     * @return null | float
     */
    public function getSurchargeRate() : ?float
    {
        return $this->surchargeRate;
    }

    /**
     * @param null | float $surchargeRate
     * @return static
     */
    public function withSurchargeRate(?float $surchargeRate) : static
    {
        $new = clone $this;
        $new->surchargeRate = $surchargeRate;

        return $new;
    }
}

