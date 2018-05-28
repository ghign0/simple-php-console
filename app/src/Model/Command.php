<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 25/05/18
 * Time: 21.42
 */

namespace Console\Model;


use Console\Command\CommandInterface;

class Command
{

    private $command;

    private $class;

    public function __construct(string $command, $class)
    {
        $this->command = $command;
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return string
     */
    public function getCommand(): string
    {
        return $this->command;
    }
}