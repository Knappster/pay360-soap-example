<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ItemSummaryBase
{
    /**
     * @var string
     */
    private string $lineId;

    /**
     * @var int
     */
    private int $continuousAuditNumber;

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

    /**
     * @return int
     */
    public function getContinuousAuditNumber() : int
    {
        return $this->continuousAuditNumber;
    }

    /**
     * @param int $continuousAuditNumber
     * @return static
     */
    public function withContinuousAuditNumber(int $continuousAuditNumber) : static
    {
        $new = clone $this;
        $new->continuousAuditNumber = $continuousAuditNumber;

        return $new;
    }
}

