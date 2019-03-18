<?php
namespace app\controllers;

use app\model\Orders;

// отвечает за маршрутизацию адресной строки
class OrderController  extends Controller
{    

    public function actionIndex() {
        $catalog = Orders::getAll();
        echo $this->render("catalog",['catalog' => $catalog]);
    }

    public function actionCard() {
        $id = (int)$_GET['id'];
        $order = Orders::getOne($id);
        //var_dump("это ордер", $order);        
        echo $this->render("allOrders", ['order' => $order]);
    }     
}