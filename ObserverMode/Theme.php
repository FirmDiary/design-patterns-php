<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 9:35
 */


namespace ObserverMode;

class Theme implements Subject
{
    private $mainColor;
    private $infoColor;

    private $observers = [];

    public function rejectObserver(Observer ...$observers)
    {
        if (count($observers)) {
            foreach ($observers as $observer) {
                $this->observers[] = $observer;
            }
        }
    }

    public function removeObserver(Observer $observer)
    {
        foreach ($this->observers as $index => $observerExist) {
            if (get_class($observerExist) === get_class($observer)) {
                array_splice($this->observers, $index, 1);
                break;
            }
        }
    }

    public function notifyObserver()
    {
        if (count($this->observers)) {
            foreach ($this->observers as $observer) {
                $observer->update($this->mainColor, $this->infoColor);
            }
        }
    }

    public function setColor($mainColor, $infoColor)
    {
        $this->mainColor = $mainColor;
        $this->infoColor = $infoColor;
        $this->colorChanged();
    }

    /**
     * 当颜色改变时通知订阅者们
     */
    public function colorChanged()
    {
        $this->notifyObserver();
    }
}
