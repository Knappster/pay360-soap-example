<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Signature
{
    /**
     * Original
     *
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\Algorithm
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\Algorithm $algorithm;

    /**
     * @var int
     */
    private int $hmacKeyID;

    /**
     * @var string
     */
    private string $digest;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\Algorithm
     */
    public function getAlgorithm() : \Knappster\CapitaPay360\SoapClient\Capita\Types\Algorithm
    {
        return $this->algorithm;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\Algorithm $algorithm
     * @return static
     */
    public function withAlgorithm(\Knappster\CapitaPay360\SoapClient\Capita\Types\Algorithm $algorithm) : static
    {
        $new = clone $this;
        $new->algorithm = $algorithm;

        return $new;
    }

    /**
     * @return int
     */
    public function getHmacKeyID() : int
    {
        return $this->hmacKeyID;
    }

    /**
     * @param int $hmacKeyID
     * @return static
     */
    public function withHmacKeyID(int $hmacKeyID) : static
    {
        $new = clone $this;
        $new->hmacKeyID = $hmacKeyID;

        return $new;
    }

    /**
     * @return string
     */
    public function getDigest() : string
    {
        return $this->digest;
    }

    /**
     * @param string $digest
     * @return static
     */
    public function withDigest(string $digest) : static
    {
        $new = clone $this;
        $new->digest = $digest;

        return $new;
    }
}

