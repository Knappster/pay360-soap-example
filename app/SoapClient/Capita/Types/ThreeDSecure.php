<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ThreeDSecure
{
    /**
     * @var null | string
     */
    private ?string $authenticationStatus = null;

    /**
     * @var null | string
     */
    private ?string $authenticationIndicator = null;

    /**
     * @var null | string
     */
    private ?string $enrolementStatus = null;

    /**
     * @var null | string
     */
    private ?string $enrolementIndicator = null;

    /**
     * @var null | \DateTimeInterface
     */
    private ?\DateTimeInterface $checkedAt = null;

    /**
     * @var null | string
     */
    private ?string $scheme = null;

    /**
     * @var null | string
     */
    private ?string $eci = null;

    /**
     * @var null | string
     */
    private ?string $xid = null;

    /**
     * @var string
     */
    private string $threeDSVersion;

    /**
     * @var null | string
     */
    private ?string $acsTransactionId = null;

    /**
     * @var null | string
     */
    private ?string $dsTransactionId = null;

    /**
     * @var null | string
     */
    private ?string $countryCode = null;

    /**
     * @var null | string
     */
    private ?string $transStatusReason = null;

    /**
     * @var null | string
     */
    private ?string $cardHolderInfo = null;

    /**
     * @return null | string
     */
    public function getAuthenticationStatus() : ?string
    {
        return $this->authenticationStatus;
    }

    /**
     * @param null | string $authenticationStatus
     * @return static
     */
    public function withAuthenticationStatus(?string $authenticationStatus) : static
    {
        $new = clone $this;
        $new->authenticationStatus = $authenticationStatus;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAuthenticationIndicator() : ?string
    {
        return $this->authenticationIndicator;
    }

    /**
     * @param null | string $authenticationIndicator
     * @return static
     */
    public function withAuthenticationIndicator(?string $authenticationIndicator) : static
    {
        $new = clone $this;
        $new->authenticationIndicator = $authenticationIndicator;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEnrolementStatus() : ?string
    {
        return $this->enrolementStatus;
    }

    /**
     * @param null | string $enrolementStatus
     * @return static
     */
    public function withEnrolementStatus(?string $enrolementStatus) : static
    {
        $new = clone $this;
        $new->enrolementStatus = $enrolementStatus;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEnrolementIndicator() : ?string
    {
        return $this->enrolementIndicator;
    }

    /**
     * @param null | string $enrolementIndicator
     * @return static
     */
    public function withEnrolementIndicator(?string $enrolementIndicator) : static
    {
        $new = clone $this;
        $new->enrolementIndicator = $enrolementIndicator;

        return $new;
    }

    /**
     * @return null | \DateTimeInterface
     */
    public function getCheckedAt() : ?\DateTimeInterface
    {
        return $this->checkedAt;
    }

    /**
     * @param null | \DateTimeInterface $checkedAt
     * @return static
     */
    public function withCheckedAt(?\DateTimeInterface $checkedAt) : static
    {
        $new = clone $this;
        $new->checkedAt = $checkedAt;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getScheme() : ?string
    {
        return $this->scheme;
    }

    /**
     * @param null | string $scheme
     * @return static
     */
    public function withScheme(?string $scheme) : static
    {
        $new = clone $this;
        $new->scheme = $scheme;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getEci() : ?string
    {
        return $this->eci;
    }

    /**
     * @param null | string $eci
     * @return static
     */
    public function withEci(?string $eci) : static
    {
        $new = clone $this;
        $new->eci = $eci;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getXid() : ?string
    {
        return $this->xid;
    }

    /**
     * @param null | string $xid
     * @return static
     */
    public function withXid(?string $xid) : static
    {
        $new = clone $this;
        $new->xid = $xid;

        return $new;
    }

    /**
     * @return string
     */
    public function getThreeDSVersion() : string
    {
        return $this->threeDSVersion;
    }

    /**
     * @param string $threeDSVersion
     * @return static
     */
    public function withThreeDSVersion(string $threeDSVersion) : static
    {
        $new = clone $this;
        $new->threeDSVersion = $threeDSVersion;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAcsTransactionId() : ?string
    {
        return $this->acsTransactionId;
    }

    /**
     * @param null | string $acsTransactionId
     * @return static
     */
    public function withAcsTransactionId(?string $acsTransactionId) : static
    {
        $new = clone $this;
        $new->acsTransactionId = $acsTransactionId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDsTransactionId() : ?string
    {
        return $this->dsTransactionId;
    }

    /**
     * @param null | string $dsTransactionId
     * @return static
     */
    public function withDsTransactionId(?string $dsTransactionId) : static
    {
        $new = clone $this;
        $new->dsTransactionId = $dsTransactionId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCountryCode() : ?string
    {
        return $this->countryCode;
    }

    /**
     * @param null | string $countryCode
     * @return static
     */
    public function withCountryCode(?string $countryCode) : static
    {
        $new = clone $this;
        $new->countryCode = $countryCode;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getTransStatusReason() : ?string
    {
        return $this->transStatusReason;
    }

    /**
     * @param null | string $transStatusReason
     * @return static
     */
    public function withTransStatusReason(?string $transStatusReason) : static
    {
        $new = clone $this;
        $new->transStatusReason = $transStatusReason;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getCardHolderInfo() : ?string
    {
        return $this->cardHolderInfo;
    }

    /**
     * @param null | string $cardHolderInfo
     * @return static
     */
    public function withCardHolderInfo(?string $cardHolderInfo) : static
    {
        $new = clone $this;
        $new->cardHolderInfo = $cardHolderInfo;

        return $new;
    }
}

