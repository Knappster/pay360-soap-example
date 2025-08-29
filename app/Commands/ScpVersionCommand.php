<?php

declare(strict_types=1);

namespace Knappster\CapitaPay360\Commands;

use Knappster\CapitaPay360\Services\Soap;
use Knappster\CapitaPay360\SoapClient\Capita\Types\ScpVersionResponse;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;

#[AsCommand(name: 'app:scp-version')]
class ScpVersionCommand extends Command
{
    public function __invoke(): int
    {
        /** @var ScpVersionResponse */
        $response = (new Soap())->getScpVersion();

        dump($response);

        return Command::SUCCESS;
    }
}
