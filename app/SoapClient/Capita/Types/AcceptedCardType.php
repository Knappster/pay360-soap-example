<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class AcceptedCardType
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription $cardDescription = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardType $cardType = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription
     */
    public function getCardDescription() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription
    {
        return $this->cardDescription;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription $cardDescription
     * @return static
     */
    public function withCardDescription(?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription $cardDescription) : static
    {
        $new = clone $this;
        $new->cardDescription = $cardDescription;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType
     */
    public function getCardType() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardType
    {
        return $this->cardType;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType $cardType
     * @return static
     */
    public function withCardType(?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardType $cardType) : static
    {
        $new = clone $this;
        $new->cardType = $cardType;

        return $new;
    }
}

