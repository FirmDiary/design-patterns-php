<?php
/**
 * @author: Azal.
 * @date: 2020/8/20
 * @time: 21:38
 */

namespace Adapter;


/**
 * 野生火鸡 是火鸡
 * Class WildTurkey
 * @package Adapter
 */
class WildTurkey implements Turkey
{
    public function gobble()
    {
        echo '野生火鸡呱呱呱的叫了起来。' . PHP_EOL;
    }

    public function fly()
    {
        echo '野生火鸡飞了起来，但是只飞了一小段距离。' . PHP_EOL;
    }
}
