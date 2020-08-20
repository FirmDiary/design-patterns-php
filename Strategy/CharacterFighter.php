<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:39
 */

namespace Strategy;


/**
 * 格斗家角色
 * Class FightersCharacter
 */
class CharacterFighter extends Character
{
    public function __construct()
    {
        $this->fistFight = new FightWithFist();
    }

    public function attack()
    {
        $this->performFight();
        if ($this->weapons instanceof Weapons) {
            $this->useWeapon();
        }
    }

    public function useWeapon()
    {
        $this->performUseWeapon();
    }

}
