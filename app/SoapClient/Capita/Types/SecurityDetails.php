<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SecurityDetails
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ThreeDSecure
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ThreeDSecure $threeDSecure = null;

    /**
     * @var null | string
     */
    private ?string $resultAVVCVV = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ThreeDSecure
     */
    public function getThreeDSecure() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ThreeDSecure
    {
        return $this->threeDSecure;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ThreeDSecure $threeDSecure
     * @return static
     */
    public function withThreeDSecure(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ThreeDSecure $threeDSecure) : static
    {
        $new = clone $this;
        $new->threeDSecure = $threeDSecure;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getResultAVVCVV() : ?string
    {
        return $this->resultAVVCVV;
    }

    /**
     * @param null | string $resultAVVCVV
     * @return static
     */
    public function withResultAVVCVV(?string $resultAVVCVV) : static
    {
        $new = clone $this;
        $new->resultAVVCVV = $resultAVVCVV;

        return $new;
    }
}

