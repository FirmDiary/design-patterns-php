<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 18:32
 */

namespace AbstractFactory;


class ChicagoStyleIngredient implements PizzaIngredientFactory
{
    public function makeFlour()
    {
        echo '|面料|:使用了【芝加哥】风味【面粉】' . PHP_EOL;
    }

    public function makeStuffing()
    {
        echo '|馅料|:使用了【芝加哥】风味【新鲜牛肉馅料】' . PHP_EOL;
    }

    public function bake()
    {
        echo '|烤法|:火烤十分钟然后冰冻五分钟' . PHP_EOL;
    }

}
