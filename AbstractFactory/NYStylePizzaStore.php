<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 16:59
 */

namespace AbstractFactory;


/**
 * 纽约风味披萨店
 * Class NYStylePizzaStore
 * @package Factory
 */
class NYStylePizzaStore extends PizzaStore
{
    const CHEESE = 1;
    const VEGGIE = 2;

    protected function createPizza($type)
    {
        $pizza = null;
        $ingredientFactory = new NYStyleIngredient();
        switch ($type) {
            case self::CHEESE:
                $pizza = new CheesePizza($ingredientFactory);
                $pizza->setName('【纽约难吃死了之芝士】披萨');
                break;
            case self::VEGGIE:
                $pizza = new VeggiePizza($ingredientFactory);
                $pizza->setName('【纽约吃了还想吃之蔬菜】披萨');
                break;
            default:
                return null;
        }

        return $pizza;
    }
}
