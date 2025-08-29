<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Surchargeable
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ApplyScpConfig
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ApplyScpConfig $applyScpConfig = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeItemDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeItemDetails $surcharge = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ApplyScpConfig
     */
    public function getApplyScpConfig() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ApplyScpConfig
    {
        return $this->applyScpConfig;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ApplyScpConfig $applyScpConfig
     * @return static
     */
    public function withApplyScpConfig(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ApplyScpConfig $applyScpConfig) : static
    {
        $new = clone $this;
        $new->applyScpConfig = $applyScpConfig;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeItemDetails
     */
    public function getSurcharge() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeItemDetails
    {
        return $this->surcharge;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeItemDetails $surcharge
     * @return static
     */
    public function withSurcharge(?\Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeItemDetails $surcharge) : static
    {
        $new = clone $this;
        $new->surcharge = $surcharge;

        return $new;
    }
}

