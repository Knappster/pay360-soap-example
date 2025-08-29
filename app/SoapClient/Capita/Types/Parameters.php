<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Parameters
{
    /**
     * @var non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\Parameter>
     */
    private array $parameter;

    /**
     * @return non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\Parameter>
     */
    public function getParameter() : array
    {
        return $this->parameter;
    }

    /**
     * @param non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\Parameter> $parameter
     * @return static
     */
    public function withParameter(array $parameter) : static
    {
        $new = clone $this;
        $new->parameter = $parameter;

        return $new;
    }
}

