<?php
/**
 * @author: Azal.
 * @date: 2020/8/25
 * @time: 19:02
 */

namespace Iterator;


class _LinkedList
{
    //头结点
    protected $head;

    public function __construct()
    {
        $this->head = new LinkedNodeStructure();
    }

    public function append($value)
    {
        $newNode = new LinkedNodeStructure($value);
        $currentNode = $this->head;
        while ($currentNode->next) {
            $currentNode = $currentNode->next;
        }
        $currentNode->next = $newNode;
    }

    public function getHead()
    {
        return $this->head;
    }

    public function setHead(LinkedNodeStructure $head = null)
    {
        $this->head = $head;
    }

}
