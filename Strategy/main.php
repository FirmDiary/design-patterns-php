<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 7:53
 */

namespace Strategy;
require '../vendor/autoload.php';


echo '歹徒出场!' . PHP_EOL;
$me = new CharacterGangster();
$me->performUseWeapon();
echo PHP_EOL;

echo '女警出场!' . PHP_EOL;
$me = new CharacterPolicewoman();
$me->performUseWeapon();
echo PHP_EOL;

echo '跆拳道高手出场!' . PHP_EOL;
$me = new CharacterTaekwondo();
$me->performFight();
echo PHP_EOL;

echo '格斗家出场!' . PHP_EOL;
$me = new CharacterFighter();

$me->attack();
$me->setFightAbility(new FightWithLeg());
$me->attack();
$me->setWeaponAbility(new WeaponGun());
$me->attack();
