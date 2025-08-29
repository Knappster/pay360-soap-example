<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class StoredCardKey
{
    /**
     * @var string
     */
    private string $token;

    /**
     * @var string
     */
    private string $lastFourDigits;

    /**
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return static
     */
    public function withToken(string $token) : static
    {
        $new = clone $this;
        $new->token = $token;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastFourDigits() : string
    {
        return $this->lastFourDigits;
    }

    /**
     * @param string $lastFourDigits
     * @return static
     */
    public function withLastFourDigits(string $lastFourDigits) : static
    {
        $new = clone $this;
        $new->lastFourDigits = $lastFourDigits;

        return $new;
    }
}

