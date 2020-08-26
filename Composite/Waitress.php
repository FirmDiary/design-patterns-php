<?php
/**
 * @author: Azal.
 * @date: 2020/8/26
 * @time: 19:54
 */

namespace Composite;


class Waitress
{
    /**
     * @var MenuComponent
     */
    protected $allMenus;

    public function __construct(MenuComponent $menuComponent)
    {
        $this->allMenus = $menuComponent;
    }

    public function printMenu()
    {
        $this->allMenus->print();
    }

    public function printNotVegetarianMenu()
    {
        $iterator = $this->allMenus->createIterator();
        echo '----非蔬菜菜单----' . PHP_EOL;
        while ($iterator->hasMore()) {
            $menuComponent = $iterator->getNext();


            if ($menuComponent) {

                try {
                    if (!$menuComponent->isVegetarian()) {
                        $menuComponent->print();
                    }
                } catch (\Exception $exception) {
                }
            }

        }
    }

}
