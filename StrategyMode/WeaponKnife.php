<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:46
 */

namespace StrategyMode;

class WeaponKnife implements Weapons
{
    public function useWeapon()
    {
        echo '使用了小刀，啾啾啾~';
    }

}
