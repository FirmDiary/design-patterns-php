<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:39
 */

namespace StrategyMode;

/**
 * 歹徒角色
 * Class GangsterCharacter
 */
class CharacterGangster extends Character
{
    public function __construct()
    {
        $this->weapons = new WeaponKnife();
    }

    public function attack()
    {
        $this->performUseWeapon();
    }

}
