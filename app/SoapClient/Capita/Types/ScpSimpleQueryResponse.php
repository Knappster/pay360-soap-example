<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ScpSimpleQueryResponse extends ScpQueryResponse implements ResultInterface
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePaymentResult
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePaymentResult $paymentResult = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePaymentResult
     */
    public function getPaymentResult() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePaymentResult
    {
        return $this->paymentResult;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePaymentResult $paymentResult
     * @return static
     */
    public function withPaymentResult(?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePaymentResult $paymentResult) : static
    {
        $new = clone $this;
        $new->paymentResult = $paymentResult;

        return $new;
    }
}

