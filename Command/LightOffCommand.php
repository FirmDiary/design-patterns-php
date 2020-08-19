<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:42
 */

namespace Command;


class LightOffCommand implements Command
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function undo()
    {
        $this->light->on();
    }
}
