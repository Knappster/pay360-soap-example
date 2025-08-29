<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ScpSimpleInvokeRequest extends ScpInvokeRequest implements RequestInterface
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSale
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSale $sale = null;

    /**
     * Constructor
     *
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSale $sale
     */
    public function __construct(?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSale $sale)
    {
        $this->sale = $sale;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSale
     */
    public function getSale() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSale
    {
        return $this->sale;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSale $sale
     * @return static
     */
    public function withSale(?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimpleSale $sale) : static
    {
        $new = clone $this;
        $new->sale = $sale;

        return $new;
    }
}

