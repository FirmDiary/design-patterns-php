<?php
/**
 * @author: Azal.
 * @date: 2020/8/20
 * @time: 22:12
 */

namespace Facade;


class CoffeeMachine
{
    public function open()
    {
        echo '打开了咖啡机' . PHP_EOL;
    }

    public function close()
    {
        echo '关闭了咖啡机' . PHP_EOL;
    }

    public function ingredients()
    {
        echo '放入咖啡豆，牛奶' . PHP_EOL;
    }

    public function serveCoffee()
    {
        echo '端出一杯香香的咖啡' . PHP_EOL;
    }

}
