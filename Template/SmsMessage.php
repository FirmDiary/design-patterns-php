<?php
/**
 * @author: Azal.
 * @date: 2020/8/23
 * @time: 11:24
 */

namespace Template;


class SmsMessage extends AbstractNotification
{
    //发送信息
    private $sendData = [];

    public function prepareSend()
    {
        echo '初始化短信发送sdk, 准备签名' . PHP_EOL;
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

    public function sendNotification(): bool
    {
        $sendInfo = '';
        foreach ($this->sendData as $key => $datum) {
            $sendInfo .= ($key . ',' . $datum . '。');
        }
        echo '发送短消息成功：' . $sendInfo . PHP_EOL;
        return true;
    }

    protected function afterSend()
    {
        echo '发完短信息在这里做一些事情' . PHP_EOL;
    }
}
