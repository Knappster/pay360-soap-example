<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class NonPaymentData
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Mcc6012
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Mcc6012 $mcc6012 = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Mcc6012
     */
    public function getMcc6012() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Mcc6012
    {
        return $this->mcc6012;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Mcc6012 $mcc6012
     * @return static
     */
    public function withMcc6012(?\Knappster\CapitaPay360\SoapClient\Capita\Types\Mcc6012 $mcc6012) : static
    {
        $new = clone $this;
        $new->mcc6012 = $mcc6012;

        return $new;
    }
}

