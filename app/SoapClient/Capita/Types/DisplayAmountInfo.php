<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class DisplayAmountInfo
{
    /**
     * @var null | string
     */
    private ?string $major = null;

    /**
     * @var null | string
     */
    private ?string $minor = null;

    /**
     * @return null | string
     */
    public function getMajor() : ?string
    {
        return $this->major;
    }

    /**
     * @param null | string $major
     * @return static
     */
    public function withMajor(?string $major) : static
    {
        $new = clone $this;
        $new->major = $major;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getMinor() : ?string
    {
        return $this->minor;
    }

    /**
     * @param null | string $minor
     * @return static
     */
    public function withMinor(?string $minor) : static
    {
        $new = clone $this;
        $new->minor = $minor;

        return $new;
    }
}

