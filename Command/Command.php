<?php
/**
 * @author: Azal.
 * @date: 2020/8/19
 * @time: 20:39
 */

namespace Command;


interface Command
{
    /**
     * 执行
     * @return mixed
     */
    public function execute();

    /**
     * 撤销
     * @return mixed
     */
    public function undo();
}
