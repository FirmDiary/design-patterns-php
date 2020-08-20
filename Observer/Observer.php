<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 9:38
 */


namespace Observer;

interface Observer
{
    /**
     * 观察者收到订阅更新内容
     * @param $mainColor
     * @param $infoColor
     * @return mixed
     */
    public function update($mainColor, $infoColor);
}
