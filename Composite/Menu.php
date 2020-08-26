<?php
/**
 * @author: Azal.
 * @date: 2020/8/26
 * @time: 19:36
 */

namespace Composite;


use Iterator\_Array;
use Iterator\ArrayIterator;
use Iterator\Iterator;

class Menu extends MenuComponent
{
    /**
     * @var _Array
     */
    protected $menuComponents;

    protected $name = '';
    protected $description = '';

    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
        $this->menuComponents = new _Array(100);
    }

    public function add(MenuComponent $menuComponent)
    {
        $this->menuComponents->addItem($menuComponent);
    }

    public function remove(MenuComponent $menuComponent)
    {
        $this->menuComponents->remove($menuComponent);
    }

    public function getChild(int $i)
    {
        return $this->menuComponents->find($i);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function createIterator(): Iterator
    {
        return new CompositeIterator(
            new ArrayIterator($this->menuComponents)
        );
    }

    public function print()
    {
        echo $this->getName() .
            '---描述:' . $this->getDescription() . PHP_EOL;

        $iterator = new ArrayIterator($this->menuComponents);

        while ($iterator->hasMore()) {
            echo $this->getName() . '的子菜单：' . PHP_EOL;
            $menuComponent = $iterator->getNext();
            $menuComponent->print();
            echo PHP_EOL;
        }
    }
}
