<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SimpleSale extends SaleBase
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PostageAndPacking
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\PostageAndPacking $postageAndPacking = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Surchargeable
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Surchargeable $surchargeable = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Items
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Items $items = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PostageAndPacking
     */
    public function getPostageAndPacking() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\PostageAndPacking
    {
        return $this->postageAndPacking;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PostageAndPacking $postageAndPacking
     * @return static
     */
    public function withPostageAndPacking(?\Knappster\CapitaPay360\SoapClient\Capita\Types\PostageAndPacking $postageAndPacking) : static
    {
        $new = clone $this;
        $new->postageAndPacking = $postageAndPacking;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Surchargeable
     */
    public function getSurchargeable() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Surchargeable
    {
        return $this->surchargeable;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Surchargeable $surchargeable
     * @return static
     */
    public function withSurchargeable(?\Knappster\CapitaPay360\SoapClient\Capita\Types\Surchargeable $surchargeable) : static
    {
        $new = clone $this;
        $new->surchargeable = $surchargeable;

        return $new;
    }

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

