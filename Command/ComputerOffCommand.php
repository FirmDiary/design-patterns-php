<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:42
 */

namespace Command;


class ComputerOffCommand implements Command
{
    private $computer;

    public function __construct(Computer $computer)
    {
        $this->computer = $computer;
    }

    public function execute()
    {
        $this->computer->off();
    }

    public function undo()
    {
        $this->computer->on();
        $this->computer->openGithub();
    }
}
