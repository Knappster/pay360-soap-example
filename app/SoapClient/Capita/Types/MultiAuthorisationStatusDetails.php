<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class MultiAuthorisationStatusDetails
{
    /**
     * @var int
     */
    private int $numberRequired;

    /**
     * @var int
     */
    private int $numberReceived;

    /**
     * @return int
     */
    public function getNumberRequired() : int
    {
        return $this->numberRequired;
    }

    /**
     * @param int $numberRequired
     * @return static
     */
    public function withNumberRequired(int $numberRequired) : static
    {
        $new = clone $this;
        $new->numberRequired = $numberRequired;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberReceived() : int
    {
        return $this->numberReceived;
    }

    /**
     * @param int $numberReceived
     * @return static
     */
    public function withNumberReceived(int $numberReceived) : static
    {
        $new = clone $this;
        $new->numberReceived = $numberReceived;

        return $new;
    }
}

