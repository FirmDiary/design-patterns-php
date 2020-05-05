<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:46
 */

namespace StrategyMode;

class WeaponGun implements Weapons
{
    public function useWeapon()
    {
        echo '使用了巴雷特！嘣~';
    }

}
