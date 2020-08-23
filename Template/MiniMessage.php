<?php
/**
 * @author: Azal.
 * @date: 2020/8/23
 * @time: 11:10
 */

namespace Template;


class MiniMessage extends AbstractNotification
{
    //发送信息
    private $sendData = [];

    protected function prepareSend()
    {
        echo '初始化小程序appid和secret，获取access_token, 准备发送模板' . PHP_EOL;
        $this->getSendData();
    }

    protected function getSendData()
    {
        echo '组装模板与消息信息' . PHP_EOL;
        $this->sendData = [
            '张三' => '你好',
            '李四' => '你坏',
            '王二麻子' => '你好坏'
        ];
    }

    protected function sendNotification(): bool
    {
        $sendInfo = '';
        foreach ($this->sendData as $key => $datum) {
            $sendInfo .= ($key . ',' . $datum . '。');
        }
        echo '发送小程序消息成功：' . $sendInfo . PHP_EOL;
        return true;
    }
}
