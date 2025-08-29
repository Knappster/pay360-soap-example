<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class CardHolderDetails
{
    /**
     * @var null | string
     */
    private ?string $cardHolderName = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Address
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Address $address = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Contact
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Contact $contact = null;

    /**
     * @var null | string
     */
    private ?string $isoCountryCode = null;

    /**
     * @return null | string
     */
    public function getCardHolderName() : ?string
    {
        return $this->cardHolderName;
    }

    /**
     * @param null | string $cardHolderName
     * @return static
     */
    public function withCardHolderName(?string $cardHolderName) : static
    {
        $new = clone $this;
        $new->cardHolderName = $cardHolderName;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Address
     */
    public function getAddress() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Address
    {
        return $this->address;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Address $address
     * @return static
     */
    public function withAddress(?\Knappster\CapitaPay360\SoapClient\Capita\Types\Address $address) : static
    {
        $new = clone $this;
        $new->address = $address;

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
}

