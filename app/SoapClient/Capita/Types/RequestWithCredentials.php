<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class RequestWithCredentials
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials $credentials;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials
     */
    public function getCredentials() : \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials
    {
        return $this->credentials;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials $credentials
     * @return static
     */
    public function withCredentials(\Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials $credentials) : static
    {
        $new = clone $this;
        $new->credentials = $credentials;

        return $new;
    }
}

