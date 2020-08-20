<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:45
 */

namespace Strategy;

class FightWithFist implements Fistfight
{
    public function fight()
    {
        echo '使用了一记升龙拳!';
    }

}
