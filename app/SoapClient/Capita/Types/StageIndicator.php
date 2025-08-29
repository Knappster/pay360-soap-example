<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class StageIndicator
{
    /**
     * @var int
     */
    private int $firstPortalStage;

    /**
     * @var int
     */
    private int $totalStages;

    /**
     * @return int
     */
    public function getFirstPortalStage() : int
    {
        return $this->firstPortalStage;
    }

    /**
     * @param int $firstPortalStage
     * @return static
     */
    public function withFirstPortalStage(int $firstPortalStage) : static
    {
        $new = clone $this;
        $new->firstPortalStage = $firstPortalStage;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotalStages() : int
    {
        return $this->totalStages;
    }

    /**
     * @param int $totalStages
     * @return static
     */
    public function withTotalStages(int $totalStages) : static
    {
        $new = clone $this;
        $new->totalStages = $totalStages;

        return $new;
    }
}

