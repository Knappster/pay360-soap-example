<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class AuthDetails
{
    /**
     * @var string
     */
    private string $authCode;

    /**
     * Amount in minor currency units(pence/cents), leading sign
     *
     * @var int
     */
    private int $amountInMinorUnits;

    /**
     * Card number with all but first six and last four digits masked with asterisks
     *
     * @var string
     */
    private string $maskedCardNumber;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\CardDescription $cardDescription;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\CardType $cardType;

    /**
     * @var string
     */
    private string $merchantNumber;

    /**
     * Date format MMYY
     *
     * @var null | string
     */
    private ?string $expiryDate = null;

    /**
     * @var null | int
     */
    private ?int $continuousAuditNumber = null;

    /**
     * @var null | string
     */
    private ?string $isoCountryCode = null;

    /**
     * @var null | string
     */
    private ?string $derivedMerchantName = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDccInfo
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDccInfo $dccInfo = null;

    /**
     * @var null | string
     */
    private ?string $cardDisplayName = null;

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
     * @return string
     */
    public function getAuthCode() : string
    {
        return $this->authCode;
    }

    /**
     * @param string $authCode
     * @return static
     */
    public function withAuthCode(string $authCode) : static
    {
        $new = clone $this;
        $new->authCode = $authCode;

        return $new;
    }

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
     * @return string
     */
    public function getMaskedCardNumber() : string
    {
        return $this->maskedCardNumber;
    }

    /**
     * @param string $maskedCardNumber
     * @return static
     */
    public function withMaskedCardNumber(string $maskedCardNumber) : static
    {
        $new = clone $this;
        $new->maskedCardNumber = $maskedCardNumber;

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
     * @return string
     */
    public function getMerchantNumber() : string
    {
        return $this->merchantNumber;
    }

    /**
     * @param string $merchantNumber
     * @return static
     */
    public function withMerchantNumber(string $merchantNumber) : static
    {
        $new = clone $this;
        $new->merchantNumber = $merchantNumber;

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
     * @return null | string
     */
    public function getIsoCountryCode() : ?string
    {
        return $this->isoCountryCode;
    }

    /**
     * @param null | string $isoCountryCode
     * @return static
     */
    public function withIsoCountryCode(?string $isoCountryCode) : static
    {
        $new = clone $this;
        $new->isoCountryCode = $isoCountryCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDerivedMerchantName() : ?string
    {
        return $this->derivedMerchantName;
    }

    /**
     * @param null | string $derivedMerchantName
     * @return static
     */
    public function withDerivedMerchantName(?string $derivedMerchantName) : static
    {
        $new = clone $this;
        $new->derivedMerchantName = $derivedMerchantName;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDccInfo
     */
    public function getDccInfo() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDccInfo
    {
        return $this->dccInfo;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDccInfo $dccInfo
     * @return static
     */
    public function withDccInfo(?\Knappster\CapitaPay360\SoapClient\Capita\Types\AuthDccInfo $dccInfo) : static
    {
        $new = clone $this;
        $new->dccInfo = $dccInfo;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCardDisplayName() : ?string
    {
        return $this->cardDisplayName;
    }

    /**
     * @param null | string $cardDisplayName
     * @return static
     */
    public function withCardDisplayName(?string $cardDisplayName) : static
    {
        $new = clone $this;
        $new->cardDisplayName = $cardDisplayName;

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

