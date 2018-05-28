<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 26/05/18
 * Time: 0.00
 */

namespace Console\Command;


class QuitCommand extends AbstractCommand implements CommandInterface
{

    /** @var string  */
    private $command;

    public function __construct()
    {
        $this->command = 'quit';
    }

    public function execute()
    {
        exit(0);
    }

    public function help()
    {
        return "esce dal  programma";
    }

    /**
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }
}