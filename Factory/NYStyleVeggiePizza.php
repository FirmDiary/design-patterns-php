<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 17:01
 */

namespace Factory;


class NYStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = '【纽约】风味【蔬菜】披萨';
    }
}
