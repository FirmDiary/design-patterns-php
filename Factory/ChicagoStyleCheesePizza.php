<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 17:01
 */

namespace Factory;


class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = '【芝加哥】风味【芝士】披萨';
    }
}
