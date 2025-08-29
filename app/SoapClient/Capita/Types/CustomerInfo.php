<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class CustomerInfo
{
    /**
     * @var null | string
     */
    private ?string $customerString1 = null;

    /**
     * @var null | string
     */
    private ?string $customerString2 = null;

    /**
     * @var null | string
     */
    private ?string $customerString3 = null;

    /**
     * @var null | string
     */
    private ?string $customerString4 = null;

    /**
     * @var null | string
     */
    private ?string $customerString5 = null;

    /**
     * @var null | int
     */
    private ?int $customerNumber1 = null;

    /**
     * @var null | int
     */
    private ?int $customerNumber2 = null;

    /**
     * @var null | int
     */
    private ?int $customerNumber3 = null;

    /**
     * @var null | int
     */
    private ?int $customerNumber4 = null;

    /**
     * @return null | string
     */
    public function getCustomerString1() : ?string
    {
        return $this->customerString1;
    }

    /**
     * @param null | string $customerString1
     * @return static
     */
    public function withCustomerString1(?string $customerString1) : static
    {
        $new = clone $this;
        $new->customerString1 = $customerString1;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerString2() : ?string
    {
        return $this->customerString2;
    }

    /**
     * @param null | string $customerString2
     * @return static
     */
    public function withCustomerString2(?string $customerString2) : static
    {
        $new = clone $this;
        $new->customerString2 = $customerString2;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerString3() : ?string
    {
        return $this->customerString3;
    }

    /**
     * @param null | string $customerString3
     * @return static
     */
    public function withCustomerString3(?string $customerString3) : static
    {
        $new = clone $this;
        $new->customerString3 = $customerString3;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerString4() : ?string
    {
        return $this->customerString4;
    }

    /**
     * @param null | string $customerString4
     * @return static
     */
    public function withCustomerString4(?string $customerString4) : static
    {
        $new = clone $this;
        $new->customerString4 = $customerString4;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCustomerString5() : ?string
    {
        return $this->customerString5;
    }

    /**
     * @param null | string $customerString5
     * @return static
     */
    public function withCustomerString5(?string $customerString5) : static
    {
        $new = clone $this;
        $new->customerString5 = $customerString5;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCustomerNumber1() : ?int
    {
        return $this->customerNumber1;
    }

    /**
     * @param null | int $customerNumber1
     * @return static
     */
    public function withCustomerNumber1(?int $customerNumber1) : static
    {
        $new = clone $this;
        $new->customerNumber1 = $customerNumber1;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCustomerNumber2() : ?int
    {
        return $this->customerNumber2;
    }

    /**
     * @param null | int $customerNumber2
     * @return static
     */
    public function withCustomerNumber2(?int $customerNumber2) : static
    {
        $new = clone $this;
        $new->customerNumber2 = $customerNumber2;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCustomerNumber3() : ?int
    {
        return $this->customerNumber3;
    }

    /**
     * @param null | int $customerNumber3
     * @return static
     */
    public function withCustomerNumber3(?int $customerNumber3) : static
    {
        $new = clone $this;
        $new->customerNumber3 = $customerNumber3;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getCustomerNumber4() : ?int
    {
        return $this->customerNumber4;
    }

    /**
     * @param null | int $customerNumber4
     * @return static
     */
    public function withCustomerNumber4(?int $customerNumber4) : static
    {
        $new = clone $this;
        $new->customerNumber4 = $customerNumber4;

        return $new;
    }
}

