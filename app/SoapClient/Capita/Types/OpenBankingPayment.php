<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class OpenBankingPayment
{
    /**
     * @var string
     */
    private string $endToEndIdentification;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionStatus
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionStatus $transactionStatus;

    /**
     * @var string
     */
    private string $paymentId;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\MultiAuthorisationStatusDetails
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\MultiAuthorisationStatusDetails $multiAuthorisationStatusDetails;

    /**
     * @return string
     */
    public function getEndToEndIdentification() : string
    {
        return $this->endToEndIdentification;
    }

    /**
     * @param string $endToEndIdentification
     * @return static
     */
    public function withEndToEndIdentification(string $endToEndIdentification) : static
    {
        $new = clone $this;
        $new->endToEndIdentification = $endToEndIdentification;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionStatus
     */
    public function getTransactionStatus() : \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionStatus
    {
        return $this->transactionStatus;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionStatus $transactionStatus
     * @return static
     */
    public function withTransactionStatus(\Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionStatus $transactionStatus) : static
    {
        $new = clone $this;
        $new->transactionStatus = $transactionStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentId() : string
    {
        return $this->paymentId;
    }

    /**
     * @param string $paymentId
     * @return static
     */
    public function withPaymentId(string $paymentId) : static
    {
        $new = clone $this;
        $new->paymentId = $paymentId;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\MultiAuthorisationStatusDetails
     */
    public function getMultiAuthorisationStatusDetails() : \Knappster\CapitaPay360\SoapClient\Capita\Types\MultiAuthorisationStatusDetails
    {
        return $this->multiAuthorisationStatusDetails;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\MultiAuthorisationStatusDetails $multiAuthorisationStatusDetails
     * @return static
     */
    public function withMultiAuthorisationStatusDetails(\Knappster\CapitaPay360\SoapClient\Capita\Types\MultiAuthorisationStatusDetails $multiAuthorisationStatusDetails) : static
    {
        $new = clone $this;
        $new->multiAuthorisationStatusDetails = $multiAuthorisationStatusDetails;

        return $new;
    }
}

