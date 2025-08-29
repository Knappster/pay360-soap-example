<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Parameter
{
    /**
     * @var string
     */
    private string $key;

    /**
     * @var string
     */
    private string $value;

    /**
     * @return string
     */
    public function getKey() : string
    {
        return $this->key;
    }

    /**
     * @param string $key
     * @return static
     */
    public function withKey(string $key) : static
    {
        $new = clone $this;
        $new->key = $key;

        return $new;
    }

    /**
     * @return string
     */
    public function getValue() : string
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return static
     */
    public function withValue(string $value) : static
    {
        $new = clone $this;
        $new->value = $value;

        return $new;
    }
}

