<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SurchargeInfo
{
    /**
     * @var non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\CardSurchargeRate>
     */
    private array $cardSurchargeRate;

    /**
     * @return non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\CardSurchargeRate>
     */
    public function getCardSurchargeRate() : array
    {
        return $this->cardSurchargeRate;
    }

    /**
     * @param non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\CardSurchargeRate> $cardSurchargeRate
     * @return static
     */
    public function withCardSurchargeRate(array $cardSurchargeRate) : static
    {
        $new = clone $this;
        $new->cardSurchargeRate = $cardSurchargeRate;

        return $new;
    }
}

