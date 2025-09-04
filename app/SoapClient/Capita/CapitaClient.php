<?php

namespace Knappster\CapitaPay360\SoapClient\Capita;

use Phpro\SoapClient\Caller\Caller;
use Knappster\CapitaPay360\SoapClient\Capita\Types;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class CapitaClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface & Types\ScpSimpleInvokeRequest $scpSimpleInvokeRequest
     * @return ResultInterface & Types\ScpSimpleInvokeResponse
     * @throws SoapException
     */
    public function scpSimpleInvoke(\Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleInvokeRequest $scpSimpleInvokeRequest) : \Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleInvokeResponse
    {
        $response = ($this->caller)('scpSimpleInvoke', $scpSimpleInvokeRequest);

        \Psl\Type\instance_of(\Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleInvokeResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Types\ScpSimpleQueryRequest $scpSimpleQueryRequest
     * @return ResultInterface & Types\ScpSimpleQueryResponse
     * @throws SoapException
     */
    public function scpSimpleQuery(\Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleQueryRequest $scpSimpleQueryRequest) : \Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleQueryResponse
    {
        $response = ($this->caller)('scpSimpleQuery', $scpSimpleQueryRequest);

        \Psl\Type\instance_of(\Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleQueryResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }

    /**
     * @param RequestInterface & Types\ScpVersionRequest $scpVersionRequest
     * @return ResultInterface & Types\ScpVersionResponse
     * @throws SoapException
     */
    public function scpVersion(\Knappster\CapitaPay360\SoapClient\Capita\Types\ScpVersionRequest $scpVersionRequest) : \Knappster\CapitaPay360\SoapClient\Capita\Types\ScpVersionResponse
    {
        $response = ($this->caller)('scpVersion', $scpVersionRequest);

        \Psl\Type\instance_of(\Knappster\CapitaPay360\SoapClient\Capita\Types\ScpVersionResponse::class)->assert($response);
        \Psl\Type\instance_of(\Phpro\SoapClient\Type\ResultInterface::class)->assert($response);

        return $response;
    }
}

