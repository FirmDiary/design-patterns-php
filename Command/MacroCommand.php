<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 21:47
 */

namespace Command;


/**
 * 宏命令
 * Class MacroCommand
 * @package Command
 */
class MacroCommand implements Command
{
    private $commands = [];

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function undo()
    {
        foreach ($this->commands as $command) {
            $command->undo();
        }
    }

}
