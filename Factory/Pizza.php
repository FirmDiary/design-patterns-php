<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 17:03
 */

namespace Factory;


abstract class Pizza
{
    protected $name;

    public function create()
    {
        echo $this->name.'制作完成,已经送上!';
    }
}
