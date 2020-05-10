<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 17:07
 */

namespace Factory;
require '../vendor/autoload.php';

echo '小李来到了纽约风味披萨店' . PHP_EOL;
$pizzaStore = new NYStylePizzaStore();

$pizzaStore->orderPizza(1);
echo PHP_EOL;
$pizzaStore->orderPizza(2);
echo PHP_EOL;


echo '二憨来到了芝加哥风味披萨店' . PHP_EOL;
$pizzaStore = new ChicagoStylePizzaStore();

$pizzaStore->orderPizza(1);
echo PHP_EOL;
$pizzaStore->orderPizza(2);
echo PHP_EOL;

