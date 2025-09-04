<?php

declare(strict_types=1);

namespace Knappster\CapitaPay360\Commands;

use Knappster\CapitaPay360\Services\Soap;
use Knappster\CapitaPay360\SoapClient\Capita\Types\ScpSimpleInvokeResponse;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;

#[AsCommand(name: 'app:scp-simple-query')]
class ScpSimpleQueryCommand extends Command
{
    public function __invoke(): int
    {
        /** @var ScpSimpleInvokeResponse */
        $response = (new Soap())->getScpSimpleQuery();

        dump($response);

        return Command::SUCCESS;
    }
}
