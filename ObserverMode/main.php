<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 9:57
 */

namespace ObserverMode;
require '../vendor/autoload.php';

$theme = new Theme();
$theme->rejectObserver(new ClientAndroid(), new ClientIos(), new ClientH5());
$theme->setColor('red', 'blue');

echo 'H5端不再订阅更新' . PHP_EOL;
$theme->removeObserver(new ClientH5());
$theme->setColor('green', 'brown');


