<?php

declare(strict_types=1);

use Knappster\CapitaPay360\Application;
use Knappster\CapitaPay360\Commands\ScpSimpleInvokeCommand;
use Knappster\CapitaPay360\Commands\ScpVersionCommand;

$dotenv = Dotenv\Dotenv::createImmutable([
    __DIR__,
    __DIR__ . '/../'
]);
$dotenv->load();
$dotenv->required('WSDL')->notEmpty();
$dotenv->required('URL')->notEmpty();
$dotenv->required('SITE_ID')->notEmpty();
$dotenv->required('SCP_ID')->notEmpty();
$dotenv->required('HMAC_KEY_ID')->notEmpty();
$dotenv->required('HMAC_KEY')->notEmpty();

$application = new Application();
$application->add(new ScpVersionCommand);
$application->add(new ScpSimpleInvokeCommand);

return $application;
