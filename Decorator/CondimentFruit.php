<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 11:27
 */


namespace Decorator;

class CondimentFruit extends CondimentDecorator
{
    private $milkTea;

    const SIGN = '果粒';

    public function __construct(MilkTea $milkTea)
    {
        $this->milkTea = $milkTea;
    }

    public function getDescription()
    {
        return self::SIGN . $this->milkTea->getDescription();
    }

    public function cost()
    {
        return $this->milkTea->cost() + 5.88;
    }
}
