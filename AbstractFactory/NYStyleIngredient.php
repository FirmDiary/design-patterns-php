<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 18:32
 */

namespace AbstractFactory;


class NYStyleIngredient implements PizzaIngredientFactory
{
    public function makeFlour()
    {
        echo '|面料|:使用了【纽约】风味【面粉】' . PHP_EOL;
    }

    public function makeStuffing()
    {
        echo '|馅料|:使用了【纽约】风味【冷冻馅料】' . PHP_EOL;
    }

    public function bake()
    {
        echo '|烤法|:火烤两分钟然后冰冻二十五分钟' . PHP_EOL;
    }

}
