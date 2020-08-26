<?php
/**
 * @author: Azal.
 * @date: 2020/8/25
 * @time: 19:00
 */

namespace Iterator;


use function Couchbase\defaultDecoder;

class _Array
{
    protected $data;

    protected $capacity;

    protected $length = 0;

    public function __construct($capacity)
    {
        $this->data = array();

        $this->capacity = $capacity;
    }

    public function addItem(...$items)
    {
        foreach ($items as $item) {
            if ($this->capacity > $this->length) {
                $this->data[$this->length] = $item;
                $this->length++;
            } else {
                break;
            }
        }
    }

    public function find($index)
    {
        if ($this->checkIndex($index)) {
            return $this->data[$index];
        }
        return null;
    }

    public function isset($index)
    {
        if ($this->checkIndex($index)) {
            return true;
        }
        return false;
    }

    public function remove($item)
    {
        foreach ($this->data as $key => $datum) {
            if ($datum === $item) {
                unset($this->data[$key]);
                break;
            }
        }
        $this->data = array_values($this->data);
    }

    /**
     * 检查index索引
     * @param $index
     * @return bool
     */
    protected function checkIndex($index)
    {
        if ($index < 0 || $index >= $this->capacity || $index >= $this->length) {
            return false;
        }
        return true;
    }

}
