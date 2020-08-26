<?php
/**
 * @author: Azal.
 * @date: 2020/8/26
 * @time: 19:31
 */

namespace Composite;


use Throwable;

class UnsupportedOperationException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
