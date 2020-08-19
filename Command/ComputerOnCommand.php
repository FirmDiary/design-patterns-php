<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:42
 */

namespace Command;


class ComputerOnCommand implements Command
{
    private $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function execute()
    {
        $this->computer->on();
        $this->computer->openGithub();
    }

    public function undo()
    {
        $this->computer->off();
    }
}
