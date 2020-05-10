<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 17:01
 */

namespace Factory;


class ChicagoStyleVeggiePizza extends Pizza
{
    public function __construct()
    {
        $this->name = '【芝加哥】风味【蔬菜】披萨';
    }
}
