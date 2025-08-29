<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SimplePaymentResult extends PaymentResultBase
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePayment
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePayment $paymentDetails = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails $errorDetails = null;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails $securityDetails;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePayment
     */
    public function getPaymentDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePayment
    {
        return $this->paymentDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePayment $paymentDetails
     * @return static
     */
    public function withPaymentDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\SimplePayment $paymentDetails) : static
    {
        $new = clone $this;
        $new->paymentDetails = $paymentDetails;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails
     */
    public function getErrorDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails $errorDetails
     * @return static
     */
    public function withErrorDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails $errorDetails) : static
    {
        $new = clone $this;
        $new->errorDetails = $errorDetails;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails
     */
    public function getSecurityDetails() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails
    {
        return $this->securityDetails;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails $securityDetails
     * @return static
     */
    public function withSecurityDetails(\Knappster\CapitaPay360\SoapClient\Capita\Types\SecurityDetails $securityDetails) : static
    {
        $new = clone $this;
        $new->securityDetails = $securityDetails;

        return $new;
    }
}

