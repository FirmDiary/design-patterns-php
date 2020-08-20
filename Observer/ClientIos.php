<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 9:54
 */


namespace Observer;

class ClientIos implements Observer, Display
{
    const SIGN = 'IOS端';

    private $mainColor;
    private $infoColor;

    public function update($mainColor, $infoColor)
    {
        $this->mainColor = $mainColor;
        $this->infoColor = $infoColor;
        $this->display();
    }


    public function display()
    {
        echo self::SIGN . '主题已经更新！主色:' . $this->mainColor . '辅色:' . $this->infoColor.PHP_EOL;
    }

}
