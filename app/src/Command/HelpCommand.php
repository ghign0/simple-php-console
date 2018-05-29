<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 26/05/18
 * Time: 0.02
 */

namespace Console\Command;



use Codedungeon\PHPCliColors\Color;
use Console\Handler\CommandHandler;
use Console\Model\Console;


/**
 * Class HelpCommand
 * @package Console\Command
 */
final class HelpCommand extends AbstractCommand implements CommandInterface, CommandAdminInterface
{

    /** @var string  */
    private $command;

    /** @var mixed  */
    private $commands;

    /**
     * HelpCommand constructor.
     */
    public function __construct()
    {
        $this->command = 'help';
        $this->commands = include CommandHandler::CONFIG;
    }


    /**
     * print the list of help message for each command
     *
     * @return string
     */
    public function execute()
    {

        $response = 'Lista dei comandi possibili'."\n";
        //foreach ($this->commands['commands'] as  $className) {
        foreach ($this->commands as $consoleCommand) {
            $className = $consoleCommand->getClass();
            /** @var CommandInterface $command */
            $command = new $className();

            $response .= " ".str_pad(Color::GREEN.$command->getCommand(), Console::CONSOLE_COMMAND_MAX_LENGTH," ", STR_PAD_RIGHT).Color::WHITE.$command->help()."\n";
        }
        return $response;

    }


    /**
     * @return string
     */
    public function help()
    {
        return "Stampa lista dei comandi";
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param \Console\Model\Command[] $commands
     * @return \Console\Model\Command[]|void
     */
    public function getConsoleCommands( $commands )
    {
        $this->commands = $commands;
    }
}