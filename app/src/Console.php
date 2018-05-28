<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 25/05/18
 * Time: 21.31
 */

namespace Console;

use Console\Command\HelpCommand;
use Console\Handler\CommandHandler;
use Console\Handler\ConsoleHandler;
use Console\Model\Console as Bash;

class Console
{

    private $consoleHandler;
    private $commandHandler;


    /**
     * Console constructor.
     */
    public function __construct(array $externalCommands)
    {
        $this->consoleHandler = new ConsoleHandler( new Bash() );
        $this->commandHandler = new CommandHandler();

        if (!is_null($externalCommands)) {
            $this->registerExternalCommands($externalCommands);
        }

        $this->welcome();
        $helpList = $this->execute_command('help');
        $this->consoleHandler->write($helpList);

    }


    /**
     * run the console
     */
    public function run()
    {

        $input = $this->consoleHandler->read();

        $response = $this->execute_command($input);
        if (is_null($response)) {
            $this->consoleHandler->write("il comando inserito non esiste");
            $response = $this->execute_command('help');

        }
        
        $this->consoleHandler->write($response);

        $this->run();
    }


    /**
     * execute a console command
     *
     * @param string $command
     * @return mixed
     */
    private function execute_command( string $command )
    {
        return $this->commandHandler->handle($command);
    }


    private function registerExternalCommands(array $externalCommands)
    {
        $this->commandHandler->registerExternalCommands($externalCommands);
    }


    /**
     * prinnt welcome message
     *
     */
    private function welcome()
    {
        $this->consoleHandler->write( str_pad(" ",ConsoleHandler::MAX_LENGTH-1,"_",STR_PAD_RIGHT));
        $this->consoleHandler->write("|".str_pad("",ConsoleHandler::MAX_LENGTH-2," ",STR_PAD_RIGHT)."|");
        $this->consoleHandler->write(str_pad("| SIMPLE PHP CLI CONSOLE ",ConsoleHandler::MAX_LENGTH-1," ",STR_PAD_RIGHT)."|");
        $this->consoleHandler->write("|".str_pad("",ConsoleHandler::MAX_LENGTH-2," ",STR_PAD_RIGHT)."|");
        $this->consoleHandler->write("|".str_pad("",ConsoleHandler::MAX_LENGTH-2,"_",STR_PAD_RIGHT)."|");
        $this->consoleHandler->write("");
    }


}