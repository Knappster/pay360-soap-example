<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class CardDetails
{
    /**
     * Mandatory on keyed and chip card transactions, should not be present for swiped
     *
     * @var string
     */
    private string $cardNumber;

    /**
     * Date format MMYY
     *
     * @var string
     */
    private string $expiryDate;

    /**
     * Date format MMYY
     *
     * @var null | string
     */
    private ?string $startDate = null;

    /**
     * @var null | string
     */
    private ?string $issueNumber = null;

    /**
     * @var null | string
     */
    private ?string $cardSecurityCode = null;

    /**
     * @return string
     */
    public function getCardNumber() : string
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return static
     */
    public function withCardNumber(string $cardNumber) : static
    {
        $new = clone $this;
        $new->cardNumber = $cardNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getExpiryDate() : string
    {
        return $this->expiryDate;
    }

    /**
     * @param string $expiryDate
     * @return static
     */
    public function withExpiryDate(string $expiryDate) : static
    {
        $new = clone $this;
        $new->expiryDate = $expiryDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getStartDate() : ?string
    {
        return $this->startDate;
    }

    /**
     * @param null | string $startDate
     * @return static
     */
    public function withStartDate(?string $startDate) : static
    {
        $new = clone $this;
        $new->startDate = $startDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getIssueNumber() : ?string
    {
        return $this->issueNumber;
    }

    /**
     * @param null | string $issueNumber
     * @return static
     */
    public function withIssueNumber(?string $issueNumber) : static
    {
        $new = clone $this;
        $new->issueNumber = $issueNumber;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCardSecurityCode() : ?string
    {
        return $this->cardSecurityCode;
    }

    /**
     * @param null | string $cardSecurityCode
     * @return static
     */
    public function withCardSecurityCode(?string $cardSecurityCode) : static
    {
        $new = clone $this;
        $new->cardSecurityCode = $cardSecurityCode;

        return $new;
    }
}

