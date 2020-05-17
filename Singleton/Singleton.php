<?php
/**
 * @author: Azal.
 * @date: 2020/5/17
 * @time: 14:51
 */

namespace Singleton;


class Singleton
{
    /**
     * 一个静态变量来记录实例
     * @var null
     */
    private static $uniqueInstance = null;

    private $num = 0;

    private $sign = '';

    /**
     * 私有的构造器 用于自己实例化变量
     * Singleton constructor.
     */
    private function __construct($sign)
    {
        $this->sign = $sign;
    }

    public static function getInstance($sign)
    {
        if (self::$uniqueInstance === null) {
            self::$uniqueInstance = new Singleton($sign);
        }
        return self::$uniqueInstance;
    }

    public function setNum($num)
    {
        $this->num += $num;
        return $this;
    }

    public function getNum()
    {
        return $this->num . '我构造自' . $this->sign;
    }

}
