<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class LgItemDetails
{
    /**
     * @var null | string
     */
    private ?string $fundCode = null;

    /**
     * @var null | bool
     */
    private ?bool $isFundItem = null;

    /**
     * @var null | string
     */
    private ?string $additionalReference = null;

    /**
     * @var null | string
     */
    private ?string $narrative = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName $accountName = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Address
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Address $accountAddress = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Contact
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Contact $contact = null;

    /**
     * @return null | string
     */
    public function getFundCode() : ?string
    {
        return $this->fundCode;
    }

    /**
     * @param null | string $fundCode
     * @return static
     */
    public function withFundCode(?string $fundCode) : static
    {
        $new = clone $this;
        $new->fundCode = $fundCode;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getIsFundItem() : ?bool
    {
        return $this->isFundItem;
    }

    /**
     * @param null | bool $isFundItem
     * @return static
     */
    public function withIsFundItem(?bool $isFundItem) : static
    {
        $new = clone $this;
        $new->isFundItem = $isFundItem;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAdditionalReference() : ?string
    {
        return $this->additionalReference;
    }

    /**
     * @param null | string $additionalReference
     * @return static
     */
    public function withAdditionalReference(?string $additionalReference) : static
    {
        $new = clone $this;
        $new->additionalReference = $additionalReference;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getNarrative() : ?string
    {
        return $this->narrative;
    }

    /**
     * @param null | string $narrative
     * @return static
     */
    public function withNarrative(?string $narrative) : static
    {
        $new = clone $this;
        $new->narrative = $narrative;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName
     */
    public function getAccountName() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName
    {
        return $this->accountName;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName $accountName
     * @return static
     */
    public function withAccountName(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName $accountName) : static
    {
        $new = clone $this;
        $new->accountName = $accountName;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Address
     */
    public function getAccountAddress() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Address
    {
        return $this->accountAddress;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Address $accountAddress
     * @return static
     */
    public function withAccountAddress(?\Knappster\CapitaPay360\SoapClient\Capita\Types\Address $accountAddress) : static
    {
        $new = clone $this;
        $new->accountAddress = $accountAddress;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Contact
     */
    public function getContact() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Contact
    {
        return $this->contact;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Contact $contact
     * @return static
     */
    public function withContact(?\Knappster\CapitaPay360\SoapClient\Capita\Types\Contact $contact) : static
    {
        $new = clone $this;
        $new->contact = $contact;

        return $new;
    }
}

