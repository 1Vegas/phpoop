<?php
namespace app\controllers;

use app\model\Orders;

// отвечает за маршрутизацию адресной строки
class OrderController  extends Controller
{    

    public function actionIndex() {
        $catalogOrders = Orders::getAll();
        echo $this->render("catalogOrders",['catalogOrders' => $catalogOrders]);
    }

    public function actionCard() {
        $id = (int)$_GET['id'];
        $order = Orders::getOne($id);                
        echo $this->render("allOrders", ['order' => $order]);
    }     
}