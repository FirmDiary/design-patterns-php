<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 9:53
 */


namespace ObserverMode;

interface Display
{
    /**
     * 观察者显示内容
     * @return mixed
     */
    public function display();
}
