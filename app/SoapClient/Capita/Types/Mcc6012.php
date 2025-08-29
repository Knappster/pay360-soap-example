<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Mcc6012
{
    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $dateOfBirth = null;

    /**
     * @var null | string
     */
    private ?string $surname = null;

    /**
     * @var null | string
     */
    private ?string $accountNumber = null;

    /**
     * @var null | string
     */
    private ?string $postcode = null;

    /**
     * @return null | \DateTimeInterface
     */
    public function getDateOfBirth() : ?\DateTimeInterface
    {
        return $this->dateOfBirth;
    }

    /**
     * @param null | \DateTimeInterface $dateOfBirth
     * @return static
     */
    public function withDateOfBirth(?\DateTimeInterface $dateOfBirth) : static
    {
        $new = clone $this;
        $new->dateOfBirth = $dateOfBirth;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSurname() : ?string
    {
        return $this->surname;
    }

    /**
     * @param null | string $surname
     * @return static
     */
    public function withSurname(?string $surname) : static
    {
        $new = clone $this;
        $new->surname = $surname;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAccountNumber() : ?string
    {
        return $this->accountNumber;
    }

    /**
     * @param null | string $accountNumber
     * @return static
     */
    public function withAccountNumber(?string $accountNumber) : static
    {
        $new = clone $this;
        $new->accountNumber = $accountNumber;

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

