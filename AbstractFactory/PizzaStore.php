<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 16:56
 */

namespace AbstractFactory;


abstract class PizzaStore
{
    public function __construct()
    {
    }

    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);

        $pizza->prepare();
        $pizza->create();

        return $pizza;
    }


    /**
     * @param $type
     * @return Pizza
     */
    protected abstract function createPizza($type);


}
