<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 25/05/18
 * Time: 21.52
 */

namespace Console\Command;

/**
 * Interface CommandInterface
 * @package Console\Command
 */
interface CommandInterface
{
    /**
     * return the name of the command: the slug you can use
     * to call the Command
     * @return mixed
     */
    public function getCommand();

    /**
     * exectue the command.
     * It must return a string that will be printed by
     * ConsoleHandler.
     * It can be a single line string or a multiple line string
     *
     * @return string
     */
    public function execute();

    /**
     * simplle function the explain the command in the 'help' print
     *
     * @return string
     */
    public function help();

}