<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 25/05/18
 * Time: 21.36
 */

return [
    'commands' => [
        'help'              =>  \Console\Command\HelpCommand::class,
        'quit'              =>  \Console\Command\QuitCommand::class,
        'version'           =>  \Console\Command\VersionCommand::class
    ],
];
