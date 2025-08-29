<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Routing
{
    /**
     * @var mixed
     */
    private mixed $returnUrl;

    /**
     * @var null | string
     */
    private ?string $backUrl = null;

    /**
     * @var null | string
     */
    private ?string $errorUrl = null;

    /**
     * @var int
     */
    private int $siteId;

    /**
     * @var int
     */
    private int $scpId;

    /**
     * @return mixed
     */
    public function getReturnUrl() : mixed
    {
        return $this->returnUrl;
    }

    /**
     * @param mixed $returnUrl
     * @return static
     */
    public function withReturnUrl(mixed $returnUrl) : static
    {
        $new = clone $this;
        $new->returnUrl = $returnUrl;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getBackUrl() : ?string
    {
        return $this->backUrl;
    }

    /**
     * @param null | string $backUrl
     * @return static
     */
    public function withBackUrl(?string $backUrl) : static
    {
        $new = clone $this;
        $new->backUrl = $backUrl;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getErrorUrl() : ?string
    {
        return $this->errorUrl;
    }

    /**
     * @param null | string $errorUrl
     * @return static
     */
    public function withErrorUrl(?string $errorUrl) : static
    {
        $new = clone $this;
        $new->errorUrl = $errorUrl;

        return $new;
    }

    /**
     * @return int
     */
    public function getSiteId() : int
    {
        return $this->siteId;
    }

    /**
     * @param int $siteId
     * @return static
     */
    public function withSiteId(int $siteId) : static
    {
        $new = clone $this;
        $new->siteId = $siteId;

        return $new;
    }

    /**
     * @return int
     */
    public function getScpId() : int
    {
        return $this->scpId;
    }

    /**
     * @param int $scpId
     * @return static
     */
    public function withScpId(int $scpId) : static
    {
        $new = clone $this;
        $new->scpId = $scpId;

        return $new;
    }
}

