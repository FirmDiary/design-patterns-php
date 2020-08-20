<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:39
 */

namespace Strategy;

/**
 * 跆拳道角色
 * Class TaekwondoCharacter
 */
class CharacterTaekwondo extends Character
{
    public function __construct()
    {
        $this->fistFight = new FightWithLeg();
    }

    public function attack()
    {
        $this->performFight();
    }
}
