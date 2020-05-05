<?php
/**
 * @author: Azal.
 * @date: 2020/5/5
 * @time: 9:37
 */


namespace ObserverMode;

interface Subject
{
    /**
     * 新的观察者订阅
     * @param Observer ...$observers
     * @return mixed
     */
    public function rejectObserver(Observer ...$observers);

    /**
     * 观察者取消订阅
     * @param Observer $observer
     * @return mixed
     */
    public function removeObserver(Observer $observer);

    /**
     * 通知观察者
     * @return mixed
     */
    public function notifyObserver();
}
