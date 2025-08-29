<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

use Phpro\SoapClient\Type\ResultInterface;

class ScpVersionResponse implements ResultInterface
{
    /**
     * @var string
     */
    private string $version;

    /**
     * @var string
     */
    private string $schemaVersion;

    /**
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return static
     */
    public function withVersion(string $version) : static
    {
        $new = clone $this;
        $new->version = $version;

        return $new;
    }

    /**
     * @return string
     */
    public function getSchemaVersion() : string
    {
        return $this->schemaVersion;
    }

    /**
     * @param string $schemaVersion
     * @return static
     */
    public function withSchemaVersion(string $schemaVersion) : static
    {
        $new = clone $this;
        $new->schemaVersion = $schemaVersion;

        return $new;
    }
}

