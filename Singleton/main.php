<?php
/**
 * @author: Azal.
 * @date: 2020/5/17
 * @time: 14:59
 */

namespace Singleton;
require '../vendor/autoload.php';


echo Singleton::getInstance('老王')->setNum(9)->getNum();

echo PHP_EOL;

echo Singleton::getInstance('李四')->setNum(1)->getNum();
