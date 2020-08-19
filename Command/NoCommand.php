<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:53
 */

namespace Command;


/**
 * 空对象
 * Class NoCommand
 * @package Command
 */
class NoCommand implements Command
{
    public function execute()
    {
    }

    public function undo()
    {
    }
}
