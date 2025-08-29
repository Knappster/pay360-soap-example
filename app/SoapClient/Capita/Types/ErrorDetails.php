<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class ErrorDetails
{
    /**
     * @var null | string
     */
    private ?string $errorId = null;

    /**
     * @var null | string
     */
    private ?string $errorMessage = null;

    /**
     * @return null | string
     */
    public function getErrorId() : ?string
    {
        return $this->errorId;
    }

    /**
     * @param null | string $errorId
     * @return static
     */
    public function withErrorId(?string $errorId) : static
    {
        $new = clone $this;
        $new->errorId = $errorId;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getErrorMessage() : ?string
    {
        return $this->errorMessage;
    }

    /**
     * @param null | string $errorMessage
     * @return static
     */
    public function withErrorMessage(?string $errorMessage) : static
    {
        $new = clone $this;
        $new->errorMessage = $errorMessage;

        return $new;
    }
}

