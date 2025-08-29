<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ScpQueryResponse extends ScpResponse
{
    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StoreCardResult
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\StoreCardResult $storeCardResult = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\EmailResult
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\EmailResult $emailResult = null;

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StoreCardResult
     */
    public function getStoreCardResult() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\StoreCardResult
    {
        return $this->storeCardResult;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\StoreCardResult $storeCardResult
     * @return static
     */
    public function withStoreCardResult(?\Knappster\CapitaPay360\SoapClient\Capita\Types\StoreCardResult $storeCardResult) : static
    {
        $new = clone $this;
        $new->storeCardResult = $storeCardResult;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\EmailResult
     */
    public function getEmailResult() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\EmailResult
    {
        return $this->emailResult;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\EmailResult $emailResult
     * @return static
     */
    public function withEmailResult(?\Knappster\CapitaPay360\SoapClient\Capita\Types\EmailResult $emailResult) : static
    {
        $new = clone $this;
        $new->emailResult = $emailResult;

        return $new;
    }
}

