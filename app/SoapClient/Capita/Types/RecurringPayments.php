<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class RecurringPayments
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentAuthorityType
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentAuthorityType $paymentAuthorityType = null;

    /**
     * @var null | string
     */
    private ?string $scheduleId = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentAuthorityType
     */
    public function getPaymentAuthorityType() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentAuthorityType
    {
        return $this->paymentAuthorityType;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentAuthorityType $paymentAuthorityType
     * @return static
     */
    public function withPaymentAuthorityType(?\Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentAuthorityType $paymentAuthorityType) : static
    {
        $new = clone $this;
        $new->paymentAuthorityType = $paymentAuthorityType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getScheduleId() : ?string
    {
        return $this->scheduleId;
    }

    /**
     * @param null | string $scheduleId
     * @return static
     */
    public function withScheduleId(?string $scheduleId) : static
    {
        $new = clone $this;
        $new->scheduleId = $scheduleId;

        return $new;
    }
}

