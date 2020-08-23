<?php
/**
 * @author: Azal.
 * @date: 2020/8/23
 * @time: 11:04
 */

namespace Template;


/**
 * 消息通知抽象类
 * Class AbstractNotification
 * @package Template
 */
abstract class AbstractNotification
{

    /**
     * 发送消息
     * 定义了算法步骤，其中部分步骤需要子类去实现
     * @return bool
     */
    final public function send(): bool
    {
        $this->prepareSend();
        $sendResult = $this->sendNotification();
        $this->afterSend();
        $this->addNotificationLog();
        return $sendResult;
    }

    /**
     * 添加消息发送记录
     * 不想被子类重写的定义为final
     */
    final protected function addNotificationLog()
    {
        echo '写入消息发送记录' . PHP_EOL;
    }

    /**
     * 准备发送
     * 必须由子类实现的定义为抽象类
     * @return mixed
     */
    abstract protected function prepareSend();

    /**
     * 发送
     * 必须由子类实现的定义为抽象类
     * @return bool
     */
    abstract protected function sendNotification(): bool;


    /**
     * 发送之后
     * 这是个hook（钩子）
     * 可以定义一个基本属性，或者什么都不做
     * 子类可以有选择的重写它，从而改变部分算法步骤
     */
    protected function afterSend()
    {
    }

}
