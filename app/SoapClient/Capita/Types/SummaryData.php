<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class SummaryData
{
    /**
     * @var string
     */
    private string $description;

    /**
     * Amount in minor currency units(pence/cents), leading sign
     *
     * @var int
     */
    private int $amountInMinorUnits;

    /**
     * @var null | string
     */
    private ?string $reference = null;

    /**
     * @var null | string
     */
    private ?string $displayableReference = null;

    /**
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return static
     */
    public function withDescription(string $description) : static
    {
        $new = clone $this;
        $new->description = $description;

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
     * @return null | string
     */
    public function getReference() : ?string
    {
        return $this->reference;
    }

    /**
     * @param null | string $reference
     * @return static
     */
    public function withReference(?string $reference) : static
    {
        $new = clone $this;
        $new->reference = $reference;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getDisplayableReference() : ?string
    {
        return $this->displayableReference;
    }

    /**
     * @param null | string $displayableReference
     * @return static
     */
    public function withDisplayableReference(?string $displayableReference) : static
    {
        $new = clone $this;
        $new->displayableReference = $displayableReference;

        return $new;
    }
}

