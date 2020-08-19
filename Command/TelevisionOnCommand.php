<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:42
 */

namespace Command;


class TelevisionOnCommand implements Command
{
    private $television;

    public function __construct(Television $television)
    {
        $this->television = $television;
    }

    public function execute()
    {
        $this->television->on();
    }

    public function undo()
    {
        $this->television->off();
    }
}
