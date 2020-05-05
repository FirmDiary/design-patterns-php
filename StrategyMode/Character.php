<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:31
 */

namespace StrategyMode;

/**
 * 游戏角色
 * Class Character
 */
abstract class Character
{
    /**
     * @var Fistfight
     */
    protected $fistFight;

    /**
     * @var Weapons
     */
    protected $weapons;

    public function performFight()
    {
        $this->fistFight->fight();
    }

    public function performUseWeapon()
    {
        $this->weapons->useWeapon();
    }

    /**
     * 动态改变格斗能力
     * @param Fistfight $ability
     */
    public function setFightAbility(Fistfight $ability)
    {
        $this->fistFight = new $ability;
    }

    /**
     * 动态改变武器使用能力
     * @param Weapons $ability
     */
    public function setWeaponAbility(Weapons $ability)
    {
        $this->weapons = new $ability;
    }

    /**
     * 攻击
     * @return mixed
     */
    abstract public function attack();

}
