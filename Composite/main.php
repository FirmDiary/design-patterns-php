<?php
/**
 * @author: Azal.
 * @date: 2020/5/17
 * @time: 14:59
 */

namespace Composite;
require '../vendor/autoload.php';

$houseMenu = new Menu('家庭菜单', '适合一家人吃的菜单');

$dinnerMenu = new Menu('晚饭菜单', '晚上吃的菜单');

$cafeMenu = new  Menu('咖啡单', '都是咖啡');

$cakeMenu = new Menu('甜品单', '都是甜的~');

$allMenus = new Menu('大菜单', '所有的菜单都在这个菜单上');

$allMenus->add($houseMenu);
$allMenus->add($dinnerMenu);
$allMenus->add($cafeMenu);


$dinnerMenu->add(new  MenuItem('面条', '稀溜溜的面条', false, 10));
$dinnerMenu->add(new  MenuItem('生菜', '好难吃的生菜', true, 0.9));

$dinnerMenu->add($cakeMenu);

$cakeMenu->add(new MenuItem('奶酪', '软喜喜的奶酪', false, 6.88));


$waitress = new Waitress($allMenus);

$waitress->printMenu();

$waitress->printNotVegetarianMenu();
