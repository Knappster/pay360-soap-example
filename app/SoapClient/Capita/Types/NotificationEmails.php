<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

class NotificationEmails
{
    /**
     * @var non-empty-array<int<0,4>, mixed>
     */
    private array $email;

    /**
     * @var null | string
     */
    private ?string $additionalEmailMessage = null;

    /**
     * @return non-empty-array<int<0,4>, mixed>
     */
    public function getEmail() : array
    {
        return $this->email;
    }

    /**
     * @param non-empty-array<int<0,4>, mixed> $email
     * @return static
     */
    public function withEmail(array $email) : static
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getAdditionalEmailMessage() : ?string
    {
        return $this->additionalEmailMessage;
    }

    /**
     * @param null | string $additionalEmailMessage
     * @return static
     */
    public function withAdditionalEmailMessage(?string $additionalEmailMessage) : static
    {
        $new = clone $this;
        $new->additionalEmailMessage = $additionalEmailMessage;

        return $new;
    }
}

