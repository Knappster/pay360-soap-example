<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class PaymentResultBase
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\Status
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\Status $status;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\Status
     */
    public function getStatus() : \Knappster\CapitaPay360\SoapClient\Capita\Types\Status
    {
        return $this->status;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\Status $status
     * @return static
     */
    public function withStatus(\Knappster\CapitaPay360\SoapClient\Capita\Types\Status $status) : static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }
}

