<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 17:01
 */

namespace AbstractFactory;


class VeggiePizza extends Pizza
{
    protected $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    public function prepare()
    {
        $this->ingredientFactory->makeFlour();
        $this->ingredientFactory->makeStuffing();
        $this->ingredientFactory->bake();
    }
}
