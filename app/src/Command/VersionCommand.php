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
        return "1.0";
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