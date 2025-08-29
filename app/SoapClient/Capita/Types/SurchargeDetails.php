<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SurchargeDetails
{
    /**
     * @var string
     */
    private string $fundCode;

    /**
     * @var string
     */
    private string $reference;

    /**
     * Amount in minor currency units(pence/cents), leading sign
     *
     * @var int
     */
    private int $amountInMinorUnits;

    /**
     * At least one of surchargeFixed and/or surchargeRate
     *  is required
     *
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis $surchargeBasis;

    /**
     * @var null | int
     */
    private ?int $continuousAuditNumber = null;

    /**
     * Amount in minor currency units(pence/cents), leading sign
     *
     * @var int
     */
    private int $vatAmountInMinorUnits;

    /**
     * @return string
     */
    public function getFundCode() : string
    {
        return $this->fundCode;
    }

    /**
     * @param string $fundCode
     * @return static
     */
    public function withFundCode(string $fundCode) : static
    {
        $new = clone $this;
        $new->fundCode = $fundCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getReference() : string
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     * @return static
     */
    public function withReference(string $reference) : static
    {
        $new = clone $this;
        $new->reference = $reference;

        return $new;
    }

    /**
     * @return int
     */
    public function getAmountInMinorUnits() : int
    {
        return $this->amountInMinorUnits;
    }

    /**
     * @param int $amountInMinorUnits
     * @return static
     */
    public function withAmountInMinorUnits(int $amountInMinorUnits) : static
    {
        $new = clone $this;
        $new->amountInMinorUnits = $amountInMinorUnits;

        return $new;
    }

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis
     */
    public function getSurchargeBasis() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis
    {
        return $this->surchargeBasis;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis $surchargeBasis
     * @return static
     */
    public function withSurchargeBasis(\Knappster\CapitaPay360\SoapClient\Capita\Types\SurchargeBasis $surchargeBasis) : static
    {
        $new = clone $this;
        $new->surchargeBasis = $surchargeBasis;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getContinuousAuditNumber() : ?int
    {
        return $this->continuousAuditNumber;
    }

    /**
     * @param null | int $continuousAuditNumber
     * @return static
     */
    public function withContinuousAuditNumber(?int $continuousAuditNumber) : static
    {
        $new = clone $this;
        $new->continuousAuditNumber = $continuousAuditNumber;

        return $new;
    }

    /**
     * @return int
     */
    public function getVatAmountInMinorUnits() : int
    {
        return $this->vatAmountInMinorUnits;
    }

    /**
     * @param int $vatAmountInMinorUnits
     * @return static
     */
    public function withVatAmountInMinorUnits(int $vatAmountInMinorUnits) : static
    {
        $new = clone $this;
        $new->vatAmountInMinorUnits = $vatAmountInMinorUnits;

        return $new;
    }
}

