<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 11:19
 */

namespace Decorator;

abstract class MilkTea
{
    const SIZE_TALL = '小杯';
    const SIZE_GRANDE = '中杯';
    const SIZE_VENTI = '大杯';

    protected $description = "奶茶";

    protected $size = "小杯";

    public function getDescription()
    {
        return $this->description;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getSize()
    {
        return $this->size;
    }

    public abstract function cost();
}
