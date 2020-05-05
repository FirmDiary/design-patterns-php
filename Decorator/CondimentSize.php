<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 11:27
 */


namespace Decorator;

class CondimentSize extends CondimentDecorator
{
    private $milkTea;

    public function __construct(MilkTea $milkTea)
    {
        $this->milkTea = $milkTea;
    }

    public function getSize()
    {
        return $this->milkTea->getSize();
    }

    public function getDescription()
    {
        return $this->getSize() . $this->milkTea->getDescription();
    }

    public function cost()
    {
        $size = $this->getSize();
        $cost = $this->milkTea->cost();
        if ($size == $this->milkTea::SIZE_TALL) {
            $cost += 3.88;
        }
        if ($size == $this->milkTea::SIZE_GRANDE) {
            $cost += 5.88;
        }
        if ($size == $this->milkTea::SIZE_VENTI) {
            $cost += 8.88;
        }
        return $cost;
    }
}
