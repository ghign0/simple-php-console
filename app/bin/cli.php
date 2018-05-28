<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 25/05/18
 * Time: 20.54
 */

include __DIR__."/../../vendor/autoload.php";

use Console\Console;

$console = new Console([
    'version' => \Console\Command\VersionCommand::class
]);
$console->run();




