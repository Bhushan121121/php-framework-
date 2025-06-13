<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
*/

require __DIR__ . '/vendor/autoload.php';

// Define root path
define('ROOT_PATH', __DIR__);

// Bootstrap the application
$app = require_once __DIR__ . '/bootstrap/app.php';

use Framework\Console\ConsoleApplication;

$console = new ConsoleApplication($app);

// Register core commands
$console->addCommand(new \Framework\Console\Commands\MigrateCommand());
$console->addCommand(new \Framework\Console\Commands\MigrateFreshCommand());
$console->addCommand(new \Framework\Console\Commands\MigrateRollbackCommand());

// Run the console application
$console->run();
