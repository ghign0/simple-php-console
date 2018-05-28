<?php
/**
 * Created by PhpStorm.
 * User: ghign0
 * Date: 29/05/18
 * Time: 0.18
 */

namespace Console\Command;
use Console\Model\Command;

/**
 * Interface CommandAdminInterface
 *
 * This intefrface implements these Commands with other permission, like having access to the all
 * commands list of the applications
 *
 * @package Console\Command
 */
interface CommandAdminInterface
{

    /**
     * gives the command instance access to application commands list
     * returns the paramater $cooomands
     *
     * @param Command[] $commands
     * @return Command[]
     */
    public function getConsoleCommands($commands);

}