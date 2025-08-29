<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class PaymentHeader
{
    /**
     * Use the xml date/time format eg 2003-09-26T15:32:00
     *
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $transactionDate;

    /**
     * @var string
     */
    private string $machineCode;

    /**
     * @var string
     */
    private string $uniqueTranId;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethod
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethod $paymentMethod;

    /**
     * @return \DateTimeInterface
     */
    public function getTransactionDate() : \DateTimeInterface
    {
        return $this->transactionDate;
    }

    /**
     * @param \DateTimeInterface $transactionDate
     * @return static
     */
    public function withTransactionDate(\DateTimeInterface $transactionDate) : static
    {
        $new = clone $this;
        $new->transactionDate = $transactionDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getMachineCode() : string
    {
        return $this->machineCode;
    }

    /**
     * @param string $machineCode
     * @return static
     */
    public function withMachineCode(string $machineCode) : static
    {
        $new = clone $this;
        $new->machineCode = $machineCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getUniqueTranId() : string
    {
        return $this->uniqueTranId;
    }

    /**
     * @param string $uniqueTranId
     * @return static
     */
    public function withUniqueTranId(string $uniqueTranId) : static
    {
        $new = clone $this;
        $new->uniqueTranId = $uniqueTranId;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethod
     */
    public function getPaymentMethod() : \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethod
    {
        return $this->paymentMethod;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethod $paymentMethod
     * @return static
     */
    public function withPaymentMethod(\Knappster\CapitaPay360\SoapClient\Capita\Types\PaymentMethod $paymentMethod) : static
    {
        $new = clone $this;
        $new->paymentMethod = $paymentMethod;

        return $new;
    }
}

