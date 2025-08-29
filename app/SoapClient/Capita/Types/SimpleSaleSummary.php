<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SimpleSaleSummary
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Items
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Items $items = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Items
     */
    public function getItems() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Items
    {
        return $this->items;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Items $items
     * @return static
     */
    public function withItems(?\Knappster\CapitaPay360\SoapClient\Capita\Types\Items $items) : static
    {
        $new = clone $this;
        $new->items = $items;

        return $new;
    }
}

