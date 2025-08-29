<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ContactDetails
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName $name = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Address
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Address $address = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\Contact
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\Contact $contact = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName
     */
    public function getName() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName
    {
        return $this->name;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName $name
     * @return static
     */
    public function withName(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ThreePartName $name) : static
    {
        $new = clone $this;
        $new->name = $name;

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
}

