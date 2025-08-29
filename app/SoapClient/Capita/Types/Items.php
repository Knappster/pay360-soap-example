<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Items
{
    /**
     * @var null | non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleItem>
     */
    private ?array $item = null;

    /**
     * @var null | non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleItemSummary>
     */
    private ?array $itemSummary = null;

    /**
     * @return null | non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleItem>
     */
    public function getItem() : ?array
    {
        return $this->item;
    }

    /**
     * @param null | non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleItem> $item
     * @return static
     */
    public function withItem(?array $item) : static
    {
        $new = clone $this;
        $new->item = $item;

        return $new;
    }

    /**
     * @return null | non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleItemSummary>
     */
    public function getItemSummary() : ?array
    {
        return $this->itemSummary;
    }

    /**
     * @param null | non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleItemSummary> $itemSummary
     * @return static
     */
    public function withItemSummary(?array $itemSummary) : static
    {
        $new = clone $this;
        $new->itemSummary = $itemSummary;

        return $new;
    }
}

