<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 23/05/18
 * Time: 17.57
 */

namespace Console\Model;

class Console
{
    const CONSOLE_LINE_MAX_LENGTH = 80;
    const CONSOLE_PREFIX = "> ";
    const CONSOLE_COMMAND_MAX_LENGTH = 30;

    private $in;

    private $out;


    public function __construct(  )
    {
        $this->in = fopen ("php://stdin","r");
        $this->out = fopen ("php://stdout", "w");
    }

    /**
     * @return bool|resource
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * @return bool|resource
     */
    public function getOut()
    {
        return $this->out;
    }

}