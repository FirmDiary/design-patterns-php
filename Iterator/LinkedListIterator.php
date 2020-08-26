<?php
/**
 * @author: Azal.
 * @date: 2020/8/25
 * @time: 19:34
 */

namespace Iterator;


class LinkedListIterator implements Iterator
{
    /**
     * @var _LinkedList
     */
    private $linkedList;

    protected $head = 0;

    public function __construct(_LinkedList $linkedList)
    {
        $this->linkedList = $linkedList;
        $this->head = $this->linkedList->getHead();
    }

    public function getNext()
    {
        if ($this->head->next) {
            $this->head = $this->head->next;
            return $this->head->value;
        }
        return null;
    }

    public function hasMore()
    {
        return $this->head->next && $this->head->next->value;
    }
}
