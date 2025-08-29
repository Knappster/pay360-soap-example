<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class InvokeResult
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\Status
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\Status $status;

    /**
     * @var null | string
     */
    private ?string $redirectUrl = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails $errorDetails = null;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\Status
     */
    public function getStatus() : \Knappster\CapitaPay360\SoapClient\Capita\Types\Status
    {
        return $this->status;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\Status $status
     * @return static
     */
    public function withStatus(\Knappster\CapitaPay360\SoapClient\Capita\Types\Status $status) : static
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getRedirectUrl() : ?string
    {
        return $this->redirectUrl;
    }

    /**
     * @param null | string $redirectUrl
     * @return static
     */
    public function withRedirectUrl(?string $redirectUrl) : static
    {
        $new = clone $this;
        $new->redirectUrl = $redirectUrl;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails
     */
    public function getErrorDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails
    {
        return $this->errorDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails $errorDetails
     * @return static
     */
    public function withErrorDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\ErrorDetails $errorDetails) : static
    {
        $new = clone $this;
        $new->errorDetails = $errorDetails;

        return $new;
    }
}

