<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class PaymentMethodType
{
    /**
     * @var string
     */
    private string $type;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Parameters
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Parameters $parameters = null;

    /**
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return static
     */
    public function withType(string $type) : static
    {
        $new = clone $this;
        $new->type = $type;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Parameters
     */
    public function getParameters() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Parameters
    {
        return $this->parameters;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Parameters $parameters
     * @return static
     */
    public function withParameters(?\Knappster\CapitaPay360\SoapClient\Capita\Types\Parameters $parameters) : static
    {
        $new = clone $this;
        $new->parameters = $parameters;

        return $new;
    }
}

