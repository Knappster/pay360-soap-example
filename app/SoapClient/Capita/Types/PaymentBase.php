<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class PaymentBase
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentHeader
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentHeader $paymentHeader;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDetails $authDetails = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\NonCardPayment
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\NonCardPayment $nonCardPayment = null;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentHeader
     */
    public function getPaymentHeader() : \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentHeader
    {
        return $this->paymentHeader;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentHeader $paymentHeader
     * @return static
     */
    public function withPaymentHeader(\Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentHeader $paymentHeader) : static
    {
        $new = clone $this;
        $new->paymentHeader = $paymentHeader;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDetails
     */
    public function getAuthDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDetails
    {
        return $this->authDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDetails $authDetails
     * @return static
     */
    public function withAuthDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDetails $authDetails) : static
    {
        $new = clone $this;
        $new->authDetails = $authDetails;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\NonCardPayment
     */
    public function getNonCardPayment() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\NonCardPayment
    {
        return $this->nonCardPayment;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\NonCardPayment $nonCardPayment
     * @return static
     */
    public function withNonCardPayment(?\Knappster\CapitaPay360\SoapClient\Capita\Types\NonCardPayment $nonCardPayment) : static
    {
        $new = clone $this;
        $new->nonCardPayment = $nonCardPayment;

        return $new;
    }
}

