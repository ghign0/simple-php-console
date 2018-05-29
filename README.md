SIMPLE CONSOLE 
===============

This is a simple php console for php cli applications

## Installation

```
composer require ghign0/console
```

## usage

```php
include __DIR__."/../vendor/autoload.php";

use Console\Console;

$console = new Console([
    'command' => \Path\To\Class\CommandClass::class
]);
$console->run();
```

Native commands are : 
* help
* version
* quit

Other Commands can be added in Console creation passing an array of commands
In the example, a command 'command' has been added.

A Command must implements `CommandInterface` and can implements `CommandAdminInterfacae`.

```php
namespace Console\Command;

interface CommandInterface
{
    public function getCommand();

    public function execute();

    public function help();

}
```
When a command is called, the method `execute()` is executed.  
It must return a string, to be written in the console by `ConsoleHandler`

You can add custom text colors by adding `Color::COLOR` in you string, where COLOR can be YELLOW, GREEN, RED, BLUE etc.  
For the complete list visit its <a href="https://packagist.org/packages/codedungeon/php-cli-colors">page</a> on Packagelist.org. 