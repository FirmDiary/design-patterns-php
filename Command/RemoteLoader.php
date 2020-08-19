<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:50
 */

namespace Command;

/**
 * 遥控器加载器
 * Class RemoteLoader
 * @package Command
 */
class RemoteLoader
{
    public static function getRemoteControl(): RemoteControl
    {
        //初始化厨房的电灯和它的开关命令
        $light = new Light('kitchen');
        $lightOn = new LightOnCommand($light);
        $lightOff = new LightOffCommand($light);


        //初始化客厅的电视和它的开关命令
        $television = new Television('living room');
        $televisionOn = new TelevisionOnCommand($television);
        $televisionOff = new TelevisionOffCommand($television);


        //初始化卧室的电脑和它的开关命令
        $computer = new Computer('bedroom');
        $computerOn = new ComputerOnCommand($computer);
        $computerOff = new ComputerOffCommand($computer);


        //加载遥控器
        $remoteControl = new RemoteControl();

        $remoteControl->setCommand(1, $lightOn, $lightOff);
        $remoteControl->setCommand(2, $televisionOn, $televisionOff);
        $remoteControl->setCommand(4, $computerOn, $computerOff);


        //设置一个宏命令
        $onMacroCommands = [$lightOn, $televisionOn, $computerOn];
        $offMacroCommands = [$lightOff, $televisionOff, $computerOff];
        $onMacroCommand = new MacroCommand($onMacroCommands);
        $offMacroCommand = new MacroCommand($offMacroCommands);
        $remoteControl->setCommand(5, $onMacroCommand, $offMacroCommand);

        return $remoteControl;
    }
}
