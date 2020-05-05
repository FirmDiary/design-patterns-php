<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 11:37
 */

namespace Decorator;
require '../vendor/autoload.php';

$tea = new FruitTea();
$tea = new CondimentFruit($tea);


echo $tea->getDescription() . $tea->cost() . PHP_EOL;
$tea = new CondimentCream($tea);


echo $tea->getDescription() . $tea->cost() . PHP_EOL;

$tea->setSize('大杯');
$tea = new CondimentSize($tea);

echo $tea->getDescription() . $tea->cost();
