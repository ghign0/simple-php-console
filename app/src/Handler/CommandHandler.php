<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 25/05/18
 * Time: 21.29
 */

namespace Console\Handler;


use Console\Command\CommandInterface;
use Console\Model\Command;

class CommandHandler
{
    /** @var string  */
    const CONFIG = __DIR__ .'/../../../config/config.command.php';

    /** @var mixed  */
    private $config;

    /** @var  */
    private $commands;

    /**
     * CommandHandler constructor.
     *
     */
    public function __construct()
    {
        $this->config = include self::CONFIG;

        $this->loadCommands($this->config['commands']);

    }


    /**
     * load commnds from configuration files
     *
     * @param array $commandConfiguration
     */
    public function loadCommands( array $commandConfiguration )
    {
        foreach ($commandConfiguration as $command => $class) {
            $this->commands[$command] = new Command( $command, $class );
        }
    }


    /**
     * add a command object to library
     *
     * @param Command $command
     */
    public function addCommand( Command $command )
    {
        $this->commands[$command->getCommand()] = $command;
    }


    /**
     * Register new command object and addd it to library
     *
     * @param $command
     * @param $class
     */
    public function registerCommand($command, $class)
    {
        $this->commands[$command] = new Command($command,$class);
    }

    /**
     * handle a command given by user
     *
     * @param $input
     * @return mixed
     */
    public function handle( $input )
    {
        if (!in_array($input,array_keys($this->commands))) {
            return null;
        }
        $commandClass = $this->commands[$input]->getClass();

        /** @var CommandInterface $command */
        $command = new $commandClass();

        return $command->execute();
    }





}