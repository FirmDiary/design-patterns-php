<?php
/**
 * @author: Azal.
 * @date: 2020/8/26
 * @time: 20:08
 */

namespace Composite;


use Iterator\_LinkedList;
use Iterator\Iterator;
use Iterator\LinkedNodeStructure;
use mysql_xdevapi\BaseResult;

class CompositeIterator implements Iterator
{

    /**
     * @var _LinkedList
     */
    protected $iterator;

    public function __construct(Iterator $iterator)
    {
        $this->iterator = new _LinkedList();
        $this->iterator->append($iterator);
    }

    public function getNext()
    {
        if ($this->hasMore()) {
            $iterator = $this->iterator->getHead()->next->value;
            $component = $iterator->getNext();

            if ($component instanceof Menu) {
                $this->iterator->append($component->createIterator());
            }
            $this->iterator->setHead($this->iterator->getHead()->next);
            return $component;
        }
        return null;
    }

    public function hasMore(LinkedNodeStructure $head = null)
    {
        $head = $head ?? $this->iterator->getHead();

        if (!$head->next) {
            return false;
        }
        if (!$head->next->value) {
            $head = $head->next;
            $this->hasMore($head);
        } else {
            return true;
        }
    }
}
