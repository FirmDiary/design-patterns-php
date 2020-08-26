<?php
/**
 * @author: Azal.
 * @date: 2020/8/25
 * @time: 19:34
 */

namespace Iterator;


class ArrayIterator implements Iterator
{
    /**
     * @var _Array
     */
    private $array;

    protected $head = 0;

    public function __construct(_Array $array)
    {
        $this->array = $array;
    }

    public function getNext()
    {
        return $this->array->find($this->head++);
    }

    public function hasMore()
    {
        return $this->array->isset($this->head);
    }
}
