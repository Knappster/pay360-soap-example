<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class LgSaleDetails
{
    /**
     * @var null | string
     */
    private ?string $areaCode = null;

    /**
     * @var null | string
     */
    private ?string $locationCode = null;

    /**
     * @var null | string
     */
    private ?string $sourceCode = null;

    /**
     * @var null | string
     */
    private ?string $userName = null;

    /**
     * @var null | string
     */
    private ?string $userCode = null;

    /**
     * @return null | string
     */
    public function getAreaCode() : ?string
    {
        return $this->areaCode;
    }

    /**
     * @param null | string $areaCode
     * @return static
     */
    public function withAreaCode(?string $areaCode) : static
    {
        $new = clone $this;
        $new->areaCode = $areaCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getLocationCode() : ?string
    {
        return $this->locationCode;
    }

    /**
     * @param null | string $locationCode
     * @return static
     */
    public function withLocationCode(?string $locationCode) : static
    {
        $new = clone $this;
        $new->locationCode = $locationCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getSourceCode() : ?string
    {
        return $this->sourceCode;
    }

    /**
     * @param null | string $sourceCode
     * @return static
     */
    public function withSourceCode(?string $sourceCode) : static
    {
        $new = clone $this;
        $new->sourceCode = $sourceCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUserName() : ?string
    {
        return $this->userName;
    }

    /**
     * @param null | string $userName
     * @return static
     */
    public function withUserName(?string $userName) : static
    {
        $new = clone $this;
        $new->userName = $userName;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getUserCode() : ?string
    {
        return $this->userCode;
    }

    /**
     * @param null | string $userCode
     * @return static
     */
    public function withUserCode(?string $userCode) : static
    {
        $new = clone $this;
        $new->userCode = $userCode;

        return $new;
    }
}

