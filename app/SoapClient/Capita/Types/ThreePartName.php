<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ThreePartName
{
    /**
     * @var string
     */
    private string $surname;

    /**
     * @var null | string
     */
    private ?string $title = null;

    /**
     * @var null | string
     */
    private ?string $forename = null;

    /**
     * @return string
     */
    public function getSurname() : string
    {
        return $this->surname;
    }

    /**
     * @param string $surname
     * @return static
     */
    public function withSurname(string $surname) : static
    {
        $new = clone $this;
        $new->surname = $surname;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTitle() : ?string
    {
        return $this->title;
    }

    /**
     * @param null | string $title
     * @return static
     */
    public function withTitle(?string $title) : static
    {
        $new = clone $this;
        $new->title = $title;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getForename() : ?string
    {
        return $this->forename;
    }

    /**
     * @param null | string $forename
     * @return static
     */
    public function withForename(?string $forename) : static
    {
        $new = clone $this;
        $new->forename = $forename;

        return $new;
    }
}

