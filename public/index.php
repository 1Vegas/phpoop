<?php

//1й вариант функции autoload - без движка
// function loadClass($className) {
//     include_once "../model/{$className}.php";     
// }

//2й вариант функции autoload (с движком)
//  include "../engine/Autoload.php";
 
//  function __autoload($className) {
//     $load = new Autoload();
//     $load->loadClass($className);
// }

//3й вариант небольшой апдейт функции autoload (с движком)
// include "../engine/Autoload.php";
 
// function __autoload($className) {
//    (new Autoload())->loadClass($className);   
// }

//4 вариант. Новый вариант автозагрузчика, который решает конфликты
// include "../engine/Autoload.php";

// spl_autoload_register('load');
 
// function load($className) {
//    (new Autoload())->loadClass($className);   
// }

//5й вариант. удалил функцию load. Вызвал метод класса

include "../engine/Autoload.php";
use app\model\Products;
use app\engine\{Autoload};
include "../config/config.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product1 = new Products(['Lenovo', 'Super Model', 42999.50]);

$product2 = new Products();
//var_dump($product1);

// $db = new Db();
// $db->queryAll("SELECT * FROM products");


