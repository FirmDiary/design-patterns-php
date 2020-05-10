<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 18:30
 */

namespace AbstractFactory;


interface PizzaIngredientFactory
{
    /**
     * 面粉
     * @return mixed
     */
    public function makeFlour();

    /**
     * 馅料
     * @return mixed
     */
    public function makeStuffing();

    /**
     * 烤
     * @return mixed
     */
    public function bake();

}
