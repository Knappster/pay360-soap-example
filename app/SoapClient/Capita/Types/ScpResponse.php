<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ScpResponse
{
    /**
     * @var null | string
     */
    private ?string $requestId = null;

    /**
     * @var string
     */
    private string $scpReference;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionState
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionState $transactionState;

    /**
     * @return null | string
     */
    public function getRequestId() : ?string
    {
        return $this->requestId;
    }

    /**
     * @param null | string $requestId
     * @return static
     */
    public function withRequestId(?string $requestId) : static
    {
        $new = clone $this;
        $new->requestId = $requestId;

        return $new;
    }

    /**
     * @return string
     */
    public function getScpReference() : string
    {
        return $this->scpReference;
    }

    /**
     * @param string $scpReference
     * @return static
     */
    public function withScpReference(string $scpReference) : static
    {
        $new = clone $this;
        $new->scpReference = $scpReference;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionState
     */
    public function getTransactionState() : \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionState
    {
        return $this->transactionState;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionState $transactionState
     * @return static
     */
    public function withTransactionState(\Knappster\CapitaPay360\SoapClient\Capita\Types\TransactionState $transactionState) : static
    {
        $new = clone $this;
        $new->transactionState = $transactionState;

        return $new;
    }
}

