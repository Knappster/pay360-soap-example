<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class PaymentMethod
{
    /**
     * @var string
     */
    private string $type;

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
}

