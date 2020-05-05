<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:44
 */

namespace StrategyMode;

class FightWithLeg implements Fistfight
{
    public function fight()
    {
        echo '使用了一记旋风踢!';
    }

}
