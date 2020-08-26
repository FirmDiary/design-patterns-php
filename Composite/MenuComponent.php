<?php
/**
 * @author: Azal.
 * @date: 2020/8/26
 * @time: 19:29
 */

namespace Composite;


use Iterator\Iterator;

abstract class MenuComponent
{

    public function add(MenuComponent $menuComponent)
    {
        throw new UnsupportedOperationException();
    }

    public function remove(MenuComponent $menuComponent)
    {
        throw new UnsupportedOperationException();
    }

    public function getChild(int $i)
    {
        throw new UnsupportedOperationException();
    }

    public function getName()
    {
        throw new UnsupportedOperationException();
    }

    public function getDescription()
    {
        throw new UnsupportedOperationException();
    }

    public function getPrice()
    {
        throw new UnsupportedOperationException();
    }

    public function isVegetarian()
    {
        throw new UnsupportedOperationException();
    }

    public function print()
    {
        throw new UnsupportedOperationException();
    }

    abstract public function createIterator(): Iterator;

}
