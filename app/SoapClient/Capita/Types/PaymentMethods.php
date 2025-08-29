<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class PaymentMethods
{
    /**
     * @var non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethodType>
     */
    private array $paymentMethod;

    /**
     * @return non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethodType>
     */
    public function getPaymentMethod() : array
    {
        return $this->paymentMethod;
    }

    /**
     * @param non-empty-array<int<0,max>, \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethodType> $paymentMethod
     * @return static
     */
    public function withPaymentMethod(array $paymentMethod) : static
    {
        $new = clone $this;
        $new->paymentMethod = $paymentMethod;

        return $new;
    }
}

