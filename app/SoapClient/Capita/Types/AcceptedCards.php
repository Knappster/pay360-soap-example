<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class AcceptedCards
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList $includes = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList $excludes = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList
     */
    public function getIncludes() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList
    {
        return $this->includes;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList $includes
     * @return static
     */
    public function withIncludes(?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList $includes) : static
    {
        $new = clone $this;
        $new->includes = $includes;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList
     */
    public function getExcludes() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList
    {
        return $this->excludes;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList $excludes
     * @return static
     */
    public function withExcludes(?\Knappster\CapitaPay360\SoapClient\Capita\Types\AcceptedCardList $excludes) : static
    {
        $new = clone $this;
        $new->excludes = $excludes;

        return $new;
    }
}

