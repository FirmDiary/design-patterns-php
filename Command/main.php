<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:37
 */

namespace Command;
require '../vendor/autoload.php';

$remoteControl = RemoteLoader::getRemoteControl();

$remoteControl->onButtonWasPushed(1);
$remoteControl->onButtonWasPushed(2);
$remoteControl->onButtonWasPushed(3);
$remoteControl->onButtonWasPushed(4);
$remoteControl->offButtonWasPushed(2);

echo '使用撤销功能' . PHP_EOL;
$remoteControl->undoButtonWasPushed();
$remoteControl->undoButtonWasPushed();


echo '宏命令' . PHP_EOL;
$remoteControl->onButtonWasPushed(5);

$remoteControl->offButtonWasPushed(5);

echo '使用撤销功能' . PHP_EOL;
$remoteControl->undoButtonWasPushed();



