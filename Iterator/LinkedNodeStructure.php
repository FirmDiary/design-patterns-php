<?php
/**
 * @author: Azal.
 * @date: 2020/8/25
 * @time: 19:14
 */

namespace Iterator;


class LinkedNodeStructure
{
    //后继指针
    public $next;

    //值
    public $value;

    public function __construct($value = null)
    {
        $this->value = $value;
        $this->next = null;
    }
}
