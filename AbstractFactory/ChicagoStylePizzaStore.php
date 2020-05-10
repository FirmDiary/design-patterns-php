<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 16:59
 */

namespace AbstractFactory;


/**
 * 芝加哥风味披萨店
 * Class NYStylePizzaStore
 * @package Factory
 */
class ChicagoStylePizzaStore extends PizzaStore
{
    const CHEESE = 1;
    const VEGGIE = 2;

    protected function createPizza($type)
    {
        $pizza = null;
        $ingredientFactory = new ChicagoStyleIngredient();
        switch ($type) {
            case self::CHEESE:
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('【芝加哥超级好吃芝士】披萨');
                break;
            case self::VEGGIE:
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('【芝加哥减脂必备蔬菜】披萨');
                break;
            default:
                return null;
        }
        return $pizza;
    }
}
