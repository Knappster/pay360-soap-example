<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ScpInvokeResponse extends ScpResponse implements ResultInterface
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\InvokeResult
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\InvokeResult $invokeResult;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\InvokeResult
     */
    public function getInvokeResult() : \Knappster\CapitaPay360\SoapClient\Capita\Types\InvokeResult
    {
        return $this->invokeResult;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\InvokeResult $invokeResult
     * @return static
     */
    public function withInvokeResult(\Knappster\CapitaPay360\SoapClient\Capita\Types\InvokeResult $invokeResult) : static
    {
        $new = clone $this;
        $new->invokeResult = $invokeResult;

        return $new;
    }
}

