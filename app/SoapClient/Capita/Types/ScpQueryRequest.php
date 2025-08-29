<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ScpQueryRequest extends RequestWithCredentials
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials $credentials;

    /**
     * @var int
     */
    private int $siteId;

    /**
     * @var string
     */
    private string $scpReference;

    /**
     * @var null | bool
     */
    private ?bool $acceptNonCardResponseData = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseVersion
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseVersion $responseVersion = null;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials
     */
    public function getCredentials() : \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials
    {
        return $this->credentials;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials $credentials
     * @return static
     */
    public function withCredentials(\Knappster\CapitaPay360\SoapClient\Capita\Types\Credentials $credentials) : static
    {
        $new = clone $this;
        $new->credentials = $credentials;

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
     * @return string
     */
    public function getScpReference() : string
    {
        return $this->scpReference;
    }

    /**
     * @param string $scpReference
     * @return static
     */
    public function withScpReference(string $scpReference) : static
    {
        $new = clone $this;
        $new->scpReference = $scpReference;

        return $new;
    }

    /**
     * @return null | bool
     */
    public function getAcceptNonCardResponseData() : ?bool
    {
        return $this->acceptNonCardResponseData;
    }

    /**
     * @param null | bool $acceptNonCardResponseData
     * @return static
     */
    public function withAcceptNonCardResponseData(?bool $acceptNonCardResponseData) : static
    {
        $new = clone $this;
        $new->acceptNonCardResponseData = $acceptNonCardResponseData;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseVersion
     */
    public function getResponseVersion() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseVersion
    {
        return $this->responseVersion;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseVersion $responseVersion
     * @return static
     */
    public function withResponseVersion(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ResponseVersion $responseVersion) : static
    {
        $new = clone $this;
        $new->responseVersion = $responseVersion;

        return $new;
    }
}

