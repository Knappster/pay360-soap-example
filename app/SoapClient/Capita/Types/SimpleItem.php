<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SimpleItem extends ItemBase
{
    /**
     * @var null | bool
     */
    private ?bool $surchargeable = null;

    /**
     * @return null | bool
     */
    public function getSurchargeable() : ?bool
    {
        return $this->surchargeable;
    }

    /**
     * @param null | bool $surchargeable
     * @return static
     */
    public function withSurchargeable(?bool $surchargeable) : static
    {
        $new = clone $this;
        $new->surchargeable = $surchargeable;

        return $new;
    }
}

