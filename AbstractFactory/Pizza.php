<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 17:03
 */

namespace AbstractFactory;


abstract class Pizza
{
    protected $name;

    /**
     * 制作原料
     * @return mixed
     */
    public abstract function prepare();

    public function setName($name)
    {
        $this->name = $name;
    }

    public function create()
    {
        echo $this->name. '制作完成！现在给大爷您端上';
    }
}
