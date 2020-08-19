<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:42
 */

namespace Command;


class Light
{
    private $where = '';

    public function __construct($where = '')
    {
        $this->where = $where;
    }

    public function on()
    {
        echo "The {$this->where}'s light is on";
        echo PHP_EOL;
    }

    public function off()
    {
        echo "The {$this->where}'s light is off";
        echo PHP_EOL;
    }
}
