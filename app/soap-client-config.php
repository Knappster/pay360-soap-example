<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Phpro\SoapClient\Soap\EngineOptions;
use Phpro\SoapClient\Soap\DefaultEngineFactory;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        EngineOptions::defaults('https://sbsctest.e-paycapita.com/scp/scpws/scpSimpleClient.wsdl')
    ))
    ->setTypeDestination('app/SoapClient/Capita/Types')
    ->setTypeNamespace('Knappster\CapitaPay360\SoapClient\Capita\Types')
    ->setClientDestination('app/SoapClient/Capita')
    ->setClientName('CapitaClient')
    ->setClientNamespace('Knappster\CapitaPay360\SoapClient\Capita')
    ->setClassMapDestination('app/SoapClient/Capita')
    ->setClassMapName('CapitaClassmap')
    ->setClassMapNamespace('Knappster\CapitaPay360\SoapClient\Capita')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
    ->addRule(
        new Rules\IsExtendingTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\ExtendingTypeAssembler())
        )
    )
    ->addRule(
        new Rules\IsAbstractTypeRule(
            $engine->getMetadata(),
            new Rules\AssembleRule(new Assembler\AbstractClassAssembler())
        )
    )
;
