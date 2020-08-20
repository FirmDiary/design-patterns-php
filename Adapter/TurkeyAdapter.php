<?php
/**
 * @author: Azal.
 * @date: 2020/8/20
 * @time: 21:40
 */

namespace Adapter;


/**
 * 适配器 使火鸡接口适配鸭子接口
 * Class TurkeyAdapter
 * @package Adapter
 */
class TurkeyAdapter implements Duck
{
    /**
     * @var Turkey
     */
    private $turkey;

    public function __construct(Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack()
    {
        $this->turkey->gobble();
    }


    public function fly()
    {
        $this->turkey->fly();
    }
}
