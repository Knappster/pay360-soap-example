<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class BankDetails extends BacsBankAccount
{
    /**
     * @var null | string
     */
    private ?string $bacsReference = null;

    /**
     * @return null | string
     */
    public function getBacsReference() : ?string
    {
        return $this->bacsReference;
    }

    /**
     * @param null | string $bacsReference
     * @return static
     */
    public function withBacsReference(?string $bacsReference) : static
    {
        $new = clone $this;
        $new->bacsReference = $bacsReference;

        return $new;
    }
}

