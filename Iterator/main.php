<?php
/**
 * @author: Azal.
 * @date: 2020/5/17
 * @time: 14:59
 */

namespace Iterator;
require '../vendor/autoload.php';

$arr = new _Array(10);
$arr->addItem(1, 2, 3, 4, 5, 6, 7, 8, 9);

$linkedList = new _LinkedList();
$linkedList->append(1);
$linkedList->append(2);
$linkedList->append(3);
$linkedList->append(4);
$linkedList->append(5);
$linkedList->append(6);
$linkedList->append(7);


function show(Iterator $iterator){
    while ($iterator->hasMore()) {
        echo $iterator->getNext() . PHP_EOL;
    }
}

echo '数组内全部数据'.PHP_EOL;
show(new ArrayIterator($arr));

echo '链表内全部数据'.PHP_EOL;
show(new LinkedListIterator($linkedList));
