<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:42
 */

namespace Command;


class Computer
{
    private $where = '';

    public function __construct($where = '')
    {
        $this->where = $where;
    }

    public function on()
    {
        echo "The {$this->where}'s computer is on";
    }

    public function openGithub()
    {
        echo ", Then you visit Azal's GitHub website";
        echo PHP_EOL;
    }

    public function off()
    {
        echo "The {$this->where}'s computer is off";
        echo PHP_EOL;
    }
}
