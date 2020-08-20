<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:37
 */

namespace Facade;
require '../vendor/autoload.php';

$coolHome = new CoolHomeFacade(
    new Television(),
    new CoffeeMachine(),
    new AirConditioning()
);

$coolHome->lookTv();
$coolHome->closeTv();

//也可以单独打开电视
$coolHome->television->open();

