<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class LgPnpDetails
{
    /**
     * @var null | string
     */
    private ?string $fundCode = null;

    /**
     * @var null | string
     */
    private ?string $pnpCode = null;

    /**
     * @var null | string
     */
    private ?string $pnpOptionCode = null;

    /**
     * @var null | string
     */
    private ?string $pnpOptionDescription = null;

    /**
     * @return null | string
     */
    public function getFundCode() : ?string
    {
        return $this->fundCode;
    }

    /**
     * @param null | string $fundCode
     * @return static
     */
    public function withFundCode(?string $fundCode) : static
    {
        $new = clone $this;
        $new->fundCode = $fundCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPnpCode() : ?string
    {
        return $this->pnpCode;
    }

    /**
     * @param null | string $pnpCode
     * @return static
     */
    public function withPnpCode(?string $pnpCode) : static
    {
        $new = clone $this;
        $new->pnpCode = $pnpCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPnpOptionCode() : ?string
    {
        return $this->pnpOptionCode;
    }

    /**
     * @param null | string $pnpOptionCode
     * @return static
     */
    public function withPnpOptionCode(?string $pnpOptionCode) : static
    {
        $new = clone $this;
        $new->pnpOptionCode = $pnpOptionCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getPnpOptionDescription() : ?string
    {
        return $this->pnpOptionDescription;
    }

    /**
     * @param null | string $pnpOptionDescription
     * @return static
     */
    public function withPnpOptionDescription(?string $pnpOptionDescription) : static
    {
        $new = clone $this;
        $new->pnpOptionDescription = $pnpOptionDescription;

        return $new;
    }
}

