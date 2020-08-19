<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:42
 */

namespace Command;


class LightOnCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function undo()
    {
        $this->light->off();
    }
}
