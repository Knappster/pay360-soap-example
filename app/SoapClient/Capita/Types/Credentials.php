<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Credentials
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\Subject
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\Subject $subject;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestIdentification
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestIdentification $requestIdentification;

    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\Signature
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\Signature $signature;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\Subject
     */
    public function getSubject() : \Knappster\CapitaPay360\SoapClient\Capita\Types\Subject
    {
        return $this->subject;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\Subject $subject
     * @return static
     */
    public function withSubject(\Knappster\CapitaPay360\SoapClient\Capita\Types\Subject $subject) : static
    {
        $new = clone $this;
        $new->subject = $subject;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestIdentification
     */
    public function getRequestIdentification() : \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestIdentification
    {
        return $this->requestIdentification;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\RequestIdentification $requestIdentification
     * @return static
     */
    public function withRequestIdentification(\Knappster\CapitaPay360\SoapClient\Capita\Types\RequestIdentification $requestIdentification) : static
    {
        $new = clone $this;
        $new->requestIdentification = $requestIdentification;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\Signature
     */
    public function getSignature() : \Knappster\CapitaPay360\SoapClient\Capita\Types\Signature
    {
        return $this->signature;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\Signature $signature
     * @return static
     */
    public function withSignature(\Knappster\CapitaPay360\SoapClient\Capita\Types\Signature $signature) : static
    {
        $new = clone $this;
        $new->signature = $signature;

        return $new;
    }
}

