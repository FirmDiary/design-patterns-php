<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:37
 */

namespace Adapter;
require '../vendor/autoload.php';

$duck = new MallardDuck();

$duck->quack();
$duck->fly();

$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

$turkeyAdapter->quack();
$turkeyAdapter->fly();





