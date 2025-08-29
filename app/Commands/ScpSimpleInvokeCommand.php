<?php

declare(strict_types=1);

namespace Knappster\CapitaPay360\Commands;

use Knappster\CapitaPay360\Services\Soap;
use Knappster\CapitaPay360\SoapClient\Capita\Types\InvokeResult;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;

#[AsCommand(name: 'app:scp-simple-invoke')]
class ScpSimpleInvokeCommand extends Command
{
    public function __invoke(): int
    {
        /** @var InvokeResult */
        $response = (new Soap())->getScpSimpleInvoke();

        dump($response);

        return Command::SUCCESS;
    }
}
