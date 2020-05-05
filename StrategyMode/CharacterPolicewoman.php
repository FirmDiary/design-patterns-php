<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:39
 */

namespace StrategyMode;

/**
 * 女警角色
 * Class PolicewomanCharacter
 */
class CharacterPolicewoman extends Character
{
    public function __construct()
    {
        $this->weapons = new WeaponGun();
    }

    public function attack()
    {
        $this->performUseWeapon();
    }

}
