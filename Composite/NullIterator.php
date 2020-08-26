<?php
/**
 * @author: Azal.
 * @date: 2020/8/26
 * @time: 20:19
 */

namespace Composite;


use Iterator\iterator;

/**
 * 空迭代器
 * Class NullIterator
 * @package Composite
 */
class NullIterator implements iterator
{
    public function getNext()
    {
        return null;
    }

    public function hasMore()
    {
        return null;
    }
}
