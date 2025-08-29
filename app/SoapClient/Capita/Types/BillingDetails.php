<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class BillingDetails
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Card
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Card $card = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardHolderDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardHolderDetails $cardHolderDetails = null;

    /**
     * @var null | bool
     */
    private ?bool $editable = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Card
     */
    public function getCard() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Card
    {
        return $this->card;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Card $card
     * @return static
     */
    public function withCard(?\Knappster\CapitaPay360\SoapClient\Capita\Types\Card $card) : static
    {
        $new = clone $this;
        $new->card = $card;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardHolderDetails
     */
    public function getCardHolderDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardHolderDetails
    {
        return $this->cardHolderDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardHolderDetails $cardHolderDetails
     * @return static
     */
    public function withCardHolderDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardHolderDetails $cardHolderDetails) : static
    {
        $new = clone $this;
        $new->cardHolderDetails = $cardHolderDetails;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getEditable() : ?bool
    {
        return $this->editable;
    }

    /**
     * @param null | bool $editable
     * @return static
     */
    public function withEditable(?bool $editable) : static
    {
        $new = clone $this;
        $new->editable = $editable;

        return $new;
    }
}

