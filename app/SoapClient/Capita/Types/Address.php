<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Address
{
    /**
     * @var null | string
     */
    private ?string $address1 = null;

    /**
     * @var null | string
     */
    private ?string $address2 = null;

    /**
     * @var null | string
     */
    private ?string $address3 = null;

    /**
     * @var null | string
     */
    private ?string $address4 = null;

    /**
     * @var null | string
     */
    private ?string $city = null;

    /**
     * @var null | string
     */
    private ?string $county = null;

    /**
     * @var null | string
     */
    private ?string $country = null;

    /**
     * @var null | string
     */
    private ?string $postcode = null;

    /**
     * @return null | string
     */
    public function getAddress1() : ?string
    {
        return $this->address1;
    }

    /**
     * @param null | string $address1
     * @return static
     */
    public function withAddress1(?string $address1) : static
    {
        $new = clone $this;
        $new->address1 = $address1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddress2() : ?string
    {
        return $this->address2;
    }

    /**
     * @param null | string $address2
     * @return static
     */
    public function withAddress2(?string $address2) : static
    {
        $new = clone $this;
        $new->address2 = $address2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddress3() : ?string
    {
        return $this->address3;
    }

    /**
     * @param null | string $address3
     * @return static
     */
    public function withAddress3(?string $address3) : static
    {
        $new = clone $this;
        $new->address3 = $address3;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAddress4() : ?string
    {
        return $this->address4;
    }

    /**
     * @param null | string $address4
     * @return static
     */
    public function withAddress4(?string $address4) : static
    {
        $new = clone $this;
        $new->address4 = $address4;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCity() : ?string
    {
        return $this->city;
    }

    /**
     * @param null | string $city
     * @return static
     */
    public function withCity(?string $city) : static
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCounty() : ?string
    {
        return $this->county;
    }

    /**
     * @param null | string $county
     * @return static
     */
    public function withCounty(?string $county) : static
    {
        $new = clone $this;
        $new->county = $county;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }

    /**
     * @param null | string $country
     * @return static
     */
    public function withCountry(?string $country) : static
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPostcode() : ?string
    {
        return $this->postcode;
    }

    /**
     * @param null | string $postcode
     * @return static
     */
    public function withPostcode(?string $postcode) : static
    {
        $new = clone $this;
        $new->postcode = $postcode;

        return $new;
    }
}

