<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class NonCardPayment
{
    /**
     * Amount in minor currency units(pence/cents), leading sign
     *
     * @var int
     */
    private int $amountInMinorUnits;

    /**
     * @var null | int
     */
    private ?int $continuousAuditNumber = null;

    /**
     * @var string
     */
    private string $paymentType;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\OpenBankingPayment
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\OpenBankingPayment $openBankingPayment = null;

    /**
     * @return int
     */
    public function getAmountInMinorUnits() : int
    {
        return $this->amountInMinorUnits;
    }

    /**
     * @param int $amountInMinorUnits
     * @return static
     */
    public function withAmountInMinorUnits(int $amountInMinorUnits) : static
    {
        $new = clone $this;
        $new->amountInMinorUnits = $amountInMinorUnits;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getContinuousAuditNumber() : ?int
    {
        return $this->continuousAuditNumber;
    }

    /**
     * @param null | int $continuousAuditNumber
     * @return static
     */
    public function withContinuousAuditNumber(?int $continuousAuditNumber) : static
    {
        $new = clone $this;
        $new->continuousAuditNumber = $continuousAuditNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentType() : string
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     * @return static
     */
    public function withPaymentType(string $paymentType) : static
    {
        $new = clone $this;
        $new->paymentType = $paymentType;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\OpenBankingPayment
     */
    public function getOpenBankingPayment() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\OpenBankingPayment
    {
        return $this->openBankingPayment;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\OpenBankingPayment $openBankingPayment
     * @return static
     */
    public function withOpenBankingPayment(?\Knappster\CapitaPay360\SoapClient\Capita\Types\OpenBankingPayment $openBankingPayment) : static
    {
        $new = clone $this;
        $new->openBankingPayment = $openBankingPayment;

        return $new;
    }
}

