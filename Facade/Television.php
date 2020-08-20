<?php
/**
 * @author: Azal.
 * @date: 2020/8/20
 * @time: 22:10
 */

namespace Facade;


class Television
{
    public function open()
    {
        echo '打开了电视' . PHP_EOL;
    }

    public function close()
    {
        echo '关闭了电视' . PHP_EOL;
    }

    public function switchToFavorite()
    {
        echo '切换到了最喜欢的CCTV1台' . PHP_EOL;
    }

}
