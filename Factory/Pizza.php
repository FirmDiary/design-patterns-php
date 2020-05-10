<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 17:03
 */

namespace Factory;


abstract class Pizza
{
    protected $name;

    public abstract function create();
}
