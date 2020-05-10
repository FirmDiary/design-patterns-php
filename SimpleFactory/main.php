<?php
/**
 * @author: Azal.
 * @date: 2020/5/10
 * @time: 16:37
 */

namespace SimpleFactory;
require '../vendor/autoload.php';

(new LotteryCenter())->convert(999);
echo PHP_EOL;
(new LotteryCenter())->convert(666);
echo PHP_EOL;
(new LotteryCenter())->convert(555);

