<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 25/05/18
 * Time: 21.00
 */

namespace Console\Handler;

use Console\Model\Console;

class ConsoleHandler
{
    const MAX_LENGTH = 80;

    const NEWLINE = 'nex_string_new_line';
    const NO_NEWLINE =  'next_string_same_line';

    private $console;

    public function __construct(Console $console)
    {
        $this->console = $console;
    }


    public function write(string $string,  array $option = null )
    {
        $output = $this->setOutputBeforeWriteToConsole($string,$option);

        fwrite($this->console->getOut(),$output);
    }

    /**
     * @return bool|string
     */
    public function read()
    {
        $this->write(Console::CONSOLE_PREFIX, [self::NO_NEWLINE]);
        $inputString = trim(fgets($this->console->getIn()));
        return $inputString;
    }

    private function setOutputBeforeWriteToConsole( $string, $option )
    {
        if( is_null($option) ){
            return $string.PHP_EOL;
        }

        if(!in_array(self::NO_NEWLINE, $option)) {
            $string .= PHP_EOL;
        }

        return $string;
    }
}