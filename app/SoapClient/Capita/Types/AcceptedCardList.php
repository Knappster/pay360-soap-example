<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class AcceptedCardList
{
    /**
     * @var non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardType>
     */
    private array $card;

    /**
     * @return non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardType>
     */
    public function getCard() : array
    {
        return $this->card;
    }

    /**
     * @param non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardType> $card
     * @return static
     */
    public function withCard(array $card) : static
    {
        $new = clone $this;
        $new->card = $card;

        return $new;
    }
}

