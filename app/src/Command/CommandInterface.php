<?php
/**
 * Created by PhpStorm.
 * User: mghinassi
 * Date: 25/05/18
 * Time: 21.52
 */

namespace Console\Command;

interface CommandInterface
{
    public function getCommand();

    public function execute();

    public function help();

}