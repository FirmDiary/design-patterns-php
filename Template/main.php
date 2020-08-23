<?php
/**
 * @author: Azal.
 * @date: 2020/5/17
 * @time: 14:59
 */

namespace Template;
require '../vendor/autoload.php';

echo '发送小程序消息------------' . PHP_EOL;
$messageProcessor = new MiniMessage();

$messageProcessor->send();


echo '发送短信----------' . PHP_EOL;
$messageProcessor = new SmsMessage();

$messageProcessor->send();
