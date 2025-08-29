<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class AuthDccInfo
{
    /**
     * @var null | string
     */
    private ?string $cardholderCurrency = null;

    /**
     * @var null | string
     */
    private ?string $cardholderAmount = null;

    /**
     * @var null | string
     */
    private ?string $cardholderRate = null;

    /**
     * @var null | string
     */
    private ?string $merchantCurrency = null;

    /**
     * @var null | string
     */
    private ?string $merchantAmount = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\DisplayAmountInfo
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\DisplayAmountInfo $displayAmount = null;

    /**
     * @return null | string
     */
    public function getCardholderCurrency() : ?string
    {
        return $this->cardholderCurrency;
    }

    /**
     * @param null | string $cardholderCurrency
     * @return static
     */
    public function withCardholderCurrency(?string $cardholderCurrency) : static
    {
        $new = clone $this;
        $new->cardholderCurrency = $cardholderCurrency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCardholderAmount() : ?string
    {
        return $this->cardholderAmount;
    }

    /**
     * @param null | string $cardholderAmount
     * @return static
     */
    public function withCardholderAmount(?string $cardholderAmount) : static
    {
        $new = clone $this;
        $new->cardholderAmount = $cardholderAmount;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCardholderRate() : ?string
    {
        return $this->cardholderRate;
    }

    /**
     * @param null | string $cardholderRate
     * @return static
     */
    public function withCardholderRate(?string $cardholderRate) : static
    {
        $new = clone $this;
        $new->cardholderRate = $cardholderRate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMerchantCurrency() : ?string
    {
        return $this->merchantCurrency;
    }

    /**
     * @param null | string $merchantCurrency
     * @return static
     */
    public function withMerchantCurrency(?string $merchantCurrency) : static
    {
        $new = clone $this;
        $new->merchantCurrency = $merchantCurrency;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMerchantAmount() : ?string
    {
        return $this->merchantAmount;
    }

    /**
     * @param null | string $merchantAmount
     * @return static
     */
    public function withMerchantAmount(?string $merchantAmount) : static
    {
        $new = clone $this;
        $new->merchantAmount = $merchantAmount;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\DisplayAmountInfo
     */
    public function getDisplayAmount() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\DisplayAmountInfo
    {
        return $this->displayAmount;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\DisplayAmountInfo $displayAmount
     * @return static
     */
    public function withDisplayAmount(?\Knappster\CapitaPay360\SoapClient\Capita\Types\DisplayAmountInfo $displayAmount) : static
    {
        $new = clone $this;
        $new->displayAmount = $displayAmount;

        return $new;
    }
}

