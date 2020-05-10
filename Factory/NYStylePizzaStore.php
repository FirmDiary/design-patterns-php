<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 16:59
 */

namespace Factory;


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
        switch ($type) {
            case self::CHEESE:
                return new NYStyleCheesePizza();
            case self::VEGGIE:
                return new NYStyleVeggiePizza();
            default:
                return null;
        }
    }
}
