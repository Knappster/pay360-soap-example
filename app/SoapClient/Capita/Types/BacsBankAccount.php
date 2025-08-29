<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class BacsBankAccount
{
    /**
     * @var string
     */
    private string $sortCode;

    /**
     * @var string
     */
    private string $bacsAccountNumber;

    /**
     * @return string
     */
    public function getSortCode() : string
    {
        return $this->sortCode;
    }

    /**
     * @param string $sortCode
     * @return static
     */
    public function withSortCode(string $sortCode) : static
    {
        $new = clone $this;
        $new->sortCode = $sortCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBacsAccountNumber() : string
    {
        return $this->bacsAccountNumber;
    }

    /**
     * @param string $bacsAccountNumber
     * @return static
     */
    public function withBacsAccountNumber(string $bacsAccountNumber) : static
    {
        $new = clone $this;
        $new->bacsAccountNumber = $bacsAccountNumber;

        return $new;
    }
}

