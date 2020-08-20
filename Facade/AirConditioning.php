<?php
/**
 * @author: Azal.
 * @date: 2020/8/20
 * @time: 22:17
 */

namespace Facade;


class AirConditioning
{

    public function open()
    {
        echo '打开了空调' . PHP_EOL;
    }

    public function close()
    {
        echo '关闭了空调' . PHP_EOL;
    }

    public function regulate($temperature = 26)
    {
        echo "空调温度被调节至{$temperature}度" . PHP_EOL;
    }

}
