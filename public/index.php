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
session_start();

include "../engine/Autoload.php";
require_once '../vendor/autoload.php';
include "../config/config.php";

use app\model\Products;
use app\engine\Autoload;
use app\engine\Render;
use app\engine\TwigRenderer;
use app\engine\Request;


spl_autoload_register([new Autoload(), 'loadClass']);

$request = new Request();

// $product = Products::getOne(1)->info("wow");
// var_dump($product);



$controllername = $_GET['c']?: 'order';
$controllername = $_GET['c']?: 'product';
$actionName = $_GET['a'];
// $controllername = $request->getControllerName()?: 'product';
// $actionName = $request->getActionName();


$controllerClass = "app\\controllers\\" . ucfirst($controllername) . "Controller";
//var_dump($controllerClass, $actionName);
if (class_exists($controllerClass)) {
    $controller = new $controllerClass(new TwigRenderer());
    $controller->runAction($actionName);
}
//var_dump($controllerClass);

///** @var Products $product */

// $product = new Products(null, "Хлеб", "Кефирный", 50);
// $product = Products::getOne(14);

//$product->save();
// $product->description = "Белый";
//$product->update();
//$product->insert();
//$product->delete();


//$product= Products::getOne(1);

//$product->price = 200;

//var_dump($product);







