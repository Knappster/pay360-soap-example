<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Contact
{
    /**
     * @var null | string
     */
    private ?string $telephone = null;

    /**
     * @var null | string
     */
    private ?string $mobile = null;

    /**
     * @var null | string
     */
    private ?string $email = null;

    /**
     * @return null | string
     */
    public function getTelephone() : ?string
    {
        return $this->telephone;
    }

    /**
     * @param null | string $telephone
     * @return static
     */
    public function withTelephone(?string $telephone) : static
    {
        $new = clone $this;
        $new->telephone = $telephone;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMobile() : ?string
    {
        return $this->mobile;
    }

    /**
     * @param null | string $mobile
     * @return static
     */
    public function withMobile(?string $mobile) : static
    {
        $new = clone $this;
        $new->mobile = $mobile;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }

    /**
     * @param null | string $email
     * @return static
     */
    public function withEmail(?string $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }
}

