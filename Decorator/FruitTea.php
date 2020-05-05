<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 11:30
 */

namespace Decorator;


class FruitTea extends MilkTea
{
    public function __construct()
    {
        $this->description = '水果茶';
    }

    public function cost()
    {
        return 10.00;
    }

}
