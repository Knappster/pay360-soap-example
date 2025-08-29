<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class Subject
{
    /**
     * Capita Site
     * Integrator
     * Other Security Entity
     * Secure Bureau Service Site
     * Capita Portal
     *
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SubjectType
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SubjectType $subjectType;

    /**
     * @var int
     */
    private int $identifier;

    /**
     * ACP - AXIS Common Payments
     * ACR - AXIS Counter Receipting
     * AIM - AXIS Income Management
     * AIP - AXIS Internet Payments
     * API - AXIS Payments Interface
     * APN - AXIS PAYe.NET
     * APP - AXIS Payment Portal
     * AOS - AXIS On-line Services
     * ASR - AXIS Speech Recognition
     * ATP - AXIS Telephone Payments
     * ATT - AXIS Touch Tone
     * DIR - Direct Authorisations from Third Parties
     * EXT - EXTERNAL SYSTEM
     * HPAY - AXIS Health PAYe.NET
     * MAPN - Managed AXIS PAYe.NET
     * MHPAY - Managed AXIS Health PAYe.NET
     * MOTO - AXIS Mail Order Telephone Order
     * PCR - Perception
     * SBS - Secure Bureau Service
     * SCM - AXIS SafeCom
     * SCP - Stored Card Portal
     * SGW - AXIS Smart Gateway
     * SMS - AXIS Short Message Service
     * THY - Thyron
     * TVWAP - AXIS DigiTV
     *
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SystemCode
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SystemCode $systemCode = null;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SubjectType
     */
    public function getSubjectType() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SubjectType
    {
        return $this->subjectType;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SubjectType $subjectType
     * @return static
     */
    public function withSubjectType(\Knappster\CapitaPay360\SoapClient\Capita\Types\SubjectType $subjectType) : static
    {
        $new = clone $this;
        $new->subjectType = $subjectType;

        return $new;
    }

    /**
     * @return int
     */
    public function getIdentifier() : int
    {
        return $this->identifier;
    }

    /**
     * @param int $identifier
     * @return static
     */
    public function withIdentifier(int $identifier) : static
    {
        $new = clone $this;
        $new->identifier = $identifier;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SystemCode
     */
    public function getSystemCode() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\SystemCode
    {
        return $this->systemCode;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\SystemCode $systemCode
     * @return static
     */
    public function withSystemCode(?\Knappster\CapitaPay360\SoapClient\Capita\Types\SystemCode $systemCode) : static
    {
        $new = clone $this;
        $new->systemCode = $systemCode;

        return $new;
    }
}

