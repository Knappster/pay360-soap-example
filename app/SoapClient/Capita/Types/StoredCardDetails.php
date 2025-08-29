<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class StoredCardDetails
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey $storedCardKey;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription $cardDescription;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType $cardType;

    /**
     * Date format MMYY
     *
     * @var null | string
     */
    private ?string $expiryDate = null;

    /**
     * @var null | string
     */
    private ?string $alphaCountryCode = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardCategory
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardCategory $cardCategory = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PrepaidIndicator
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\PrepaidIndicator $prepaidIndicator = null;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey
     */
    public function getStoredCardKey() : \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey
    {
        return $this->storedCardKey;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey $storedCardKey
     * @return static
     */
    public function withStoredCardKey(\Knappster\CapitaPay360\SoapClient\Capita\Types\StoredCardKey $storedCardKey) : static
    {
        $new = clone $this;
        $new->storedCardKey = $storedCardKey;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription
     */
    public function getCardDescription() : \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription
    {
        return $this->cardDescription;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription $cardDescription
     * @return static
     */
    public function withCardDescription(\Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription $cardDescription) : static
    {
        $new = clone $this;
        $new->cardDescription = $cardDescription;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType
     */
    public function getCardType() : \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType
    {
        return $this->cardType;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType $cardType
     * @return static
     */
    public function withCardType(\Knappster\CapitaPay360\SoapClient\Capita\Types\CardType $cardType) : static
    {
        $new = clone $this;
        $new->cardType = $cardType;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getExpiryDate() : ?string
    {
        return $this->expiryDate;
    }

    /**
     * @param null | string $expiryDate
     * @return static
     */
    public function withExpiryDate(?string $expiryDate) : static
    {
        $new = clone $this;
        $new->expiryDate = $expiryDate;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAlphaCountryCode() : ?string
    {
        return $this->alphaCountryCode;
    }

    /**
     * @param null | string $alphaCountryCode
     * @return static
     */
    public function withAlphaCountryCode(?string $alphaCountryCode) : static
    {
        $new = clone $this;
        $new->alphaCountryCode = $alphaCountryCode;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardCategory
     */
    public function getCardCategory() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardCategory
    {
        return $this->cardCategory;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CardCategory $cardCategory
     * @return static
     */
    public function withCardCategory(?\Knappster\CapitaPay360\SoapClient\Capita\Types\CardCategory $cardCategory) : static
    {
        $new = clone $this;
        $new->cardCategory = $cardCategory;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PrepaidIndicator
     */
    public function getPrepaidIndicator() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\PrepaidIndicator
    {
        return $this->prepaidIndicator;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\PrepaidIndicator $prepaidIndicator
     * @return static
     */
    public function withPrepaidIndicator(?\Knappster\CapitaPay360\SoapClient\Capita\Types\PrepaidIndicator $prepaidIndicator) : static
    {
        $new = clone $this;
        $new->prepaidIndicator = $prepaidIndicator;

        return $new;
    }
}

