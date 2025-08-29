<?php

namespace Knappster\CapitaPay360\SoapClient\Capita\Types;

use Phpro\SoapClient\Type\RequestInterface;

class ScpVersionRequest extends RequestWithCredentials implements RequestInterface
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }
}

