<?php
/**
 * @author: Azal.
 * @date: 2020/8/20
 * @time: 21:35
 */

namespace Adapter;


/**
 * 绿头鸭 是鸭子
 * Class MallardDuck
 * @package Adapter
 */
class MallardDuck implements Duck
{
    public function quack()
    {
        echo '绿头鸭子嘎嘎嘎的叫了起来。' . PHP_EOL;
    }

    public function fly()
    {
        echo '绿头鸭子飞了起来，飞了很远！' . PHP_EOL;
    }
}
