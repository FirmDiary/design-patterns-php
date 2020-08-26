<?php
/**
 * @author: Azal.
 * @date: 2020/8/26
 * @time: 19:36
 */

namespace Composite;


use Iterator\ArrayIterator;
use Iterator\iterator;

class MenuItem extends MenuComponent
{
    protected $name = '';
    protected $description = '';
    protected $isVegetarian = false;
    protected $price = 0.00;

    public function __construct(string $name, string $description, bool $isVegetarian, float $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->isVegetarian = $isVegetarian;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function isVegetarian()
    {
        return $this->isVegetarian;
    }

    public function createIterator(): Iterator
    {
        return new NullIterator();
    }

    public function print()
    {
        echo $this->getName() . '---' .
            ($this->isVegetarian() ? "是蔬菜。" : '不是蔬菜。') .
            '价钱:' . $this->getPrice() .
            '描述:' . $this->getDescription();
    }


}
