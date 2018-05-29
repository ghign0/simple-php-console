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

    /**
     * QuitCommand constructor.
     */
    public function __construct()
    {
        $this->command = 'quit';
    }

    /**
     * @return string|void
     */
    public function execute()
    {
        exit(0);
    }

    /**
     * @return string
     */
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