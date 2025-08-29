<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class RequestIdentification
{
    /**
     * @var string
     */
    private string $uniqueReference;

    /**
     * @var string
     */
    private string $timeStamp;

    /**
     * @return string
     */
    public function getUniqueReference() : string
    {
        return $this->uniqueReference;
    }

    /**
     * @param string $uniqueReference
     * @return static
     */
    public function withUniqueReference(string $uniqueReference) : static
    {
        $new = clone $this;
        $new->uniqueReference = $uniqueReference;

        return $new;
    }

    /**
     * @return string
     */
    public function getTimeStamp() : string
    {
        return $this->timeStamp;
    }

    /**
     * @param string $timeStamp
     * @return static
     */
    public function withTimeStamp(string $timeStamp) : static
    {
        $new = clone $this;
        $new->timeStamp = $timeStamp;

        return $new;
    }
}

