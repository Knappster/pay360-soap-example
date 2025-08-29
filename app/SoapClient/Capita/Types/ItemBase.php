<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ItemBase
{
    /**
     * @var \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData
     */
    private \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData $itemSummary;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem $tax = null;

    /**
     * @var null | int
     */
    private ?int $quantity = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\NotificationEmails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\NotificationEmails $notificationEmails = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\LgItemDetails
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\LgItemDetails $lgItemDetails = null;

    /**
     * @var null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CustomerInfo
     */
    private ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CustomerInfo $customerInfo = null;

    /**
     * @var string
     */
    private string $lineId;

    /**
     * @return \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData
     */
    public function getItemSummary() : \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData
    {
        return $this->itemSummary;
    }

    /**
     * @param \Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData $itemSummary
     * @return static
     */
    public function withItemSummary(\Knappster\CapitaPay360\SoapClient\Capita\Types\SummaryData $itemSummary) : static
    {
        $new = clone $this;
        $new->itemSummary = $itemSummary;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem
     */
    public function getTax() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem
    {
        return $this->tax;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem $tax
     * @return static
     */
    public function withTax(?\Knappster\CapitaPay360\SoapClient\Capita\Types\TaxItem $tax) : static
    {
        $new = clone $this;
        $new->tax = $tax;

        return $new;
    }

    /**
     * @return null | int
     */
    public function getQuantity() : ?int
    {
        return $this->quantity;
    }

    /**
     * @param null | int $quantity
     * @return static
     */
    public function withQuantity(?int $quantity) : static
    {
        $new = clone $this;
        $new->quantity = $quantity;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\NotificationEmails
     */
    public function getNotificationEmails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\NotificationEmails
    {
        return $this->notificationEmails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\NotificationEmails $notificationEmails
     * @return static
     */
    public function withNotificationEmails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\NotificationEmails $notificationEmails) : static
    {
        $new = clone $this;
        $new->notificationEmails = $notificationEmails;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\LgItemDetails
     */
    public function getLgItemDetails() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\LgItemDetails
    {
        return $this->lgItemDetails;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\LgItemDetails $lgItemDetails
     * @return static
     */
    public function withLgItemDetails(?\Knappster\CapitaPay360\SoapClient\Capita\Types\LgItemDetails $lgItemDetails) : static
    {
        $new = clone $this;
        $new->lgItemDetails = $lgItemDetails;

        return $new;
    }

    /**
     * @return null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CustomerInfo
     */
    public function getCustomerInfo() : ?\Knappster\CapitaPay360\SoapClient\Capita\Types\CustomerInfo
    {
        return $this->customerInfo;
    }

    /**
     * @param null | \Knappster\CapitaPay360\SoapClient\Capita\Types\CustomerInfo $customerInfo
     * @return static
     */
    public function withCustomerInfo(?\Knappster\CapitaPay360\SoapClient\Capita\Types\CustomerInfo $customerInfo) : static
    {
        $new = clone $this;
        $new->customerInfo = $customerInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getLineId() : string
    {
        return $this->lineId;
    }

    /**
     * @param string $lineId
     * @return static
     */
    public function withLineId(string $lineId) : static
    {
        $new = clone $this;
        $new->lineId = $lineId;

        return $new;
    }
}

