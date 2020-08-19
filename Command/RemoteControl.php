<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:45
 */

namespace Command;


/*
 * 遥控器
 */

class RemoteControl
{
    /**
     * 总共按钮个数
     */
    const COMMAND_NUMS = 7;

    /**
     * 可撤销次数
     */
    const COMMAND_UNDO_NUMS = 2;

    private $onCommands = [];

    private $offCommands = [];

    public $preCommands = [];

    public function __construct()
    {
        $noCommand = new NoCommand();
        $i = 0;
        $this->preCommands[$i] = $noCommand;

        while ($i + 1 < self::COMMAND_NUMS) {
            $this->onCommands[$i] = $noCommand;
            $this->offCommands[$i] = $noCommand;
            $i++;
        }
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonWasPushed(int $slot)
    {
        $command = $this->onCommands[$slot];
        $command->execute();

        $this->addPreCommand($command);
    }

    public function offButtonWasPushed(int $slot)
    {
        $command = $this->offCommands[$slot];
        $command->execute();

        $this->addPreCommand($command);
    }

    public function undoButtonWasPushed()
    {
        $commandNums = sizeof($this->preCommands);
        $this->preCommands[$commandNums - 1]->undo();

        if ($commandNums !== 1) {
            array_pop($this->preCommands);
        }
    }

    /**
     * 记录上次命令
     * @param Command $command
     */
    private function addPreCommand(Command $command)
    {
        if ($command instanceof NoCommand) {
            return;
        }

        if (sizeof($this->preCommands) <= self::COMMAND_UNDO_NUMS) {
            array_push(
                $this->preCommands,
                $command
            );
        } else {
            unset($this->preCommands[1]);
            $this->preCommands = array_values($this->preCommands);
            $this->addPreCommand($command);
        }
    }


}
