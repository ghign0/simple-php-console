<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 25/05/18
 * Time: 21.17
 */

namespace Console\Command;

use Console\Model\Console;

class VersionCommand extends AbstractCommand implements CommandInterface
{
    /** @var string  */
    private $command;

    public function __construct()
    {
        $this->command = 'version';
    }

    public function execute()
    {
        return "Simple PHP console - version 1.2.1\n";
    }


    public function help()
    {
        return "stampa la versione";
    }

    public function getCommand()
    {
        return $this->command;
    }

}