<?php
namespace app\controllers;

use app\model\Orders;

// отвечает за маршрутизацию адресной строки
class OrdersController  extends Controller
{    

    public function actionIndex() {
        $list = Orders::getAll();
        echo $this->render("list",['list' => $list]);
    }

    public function actionCard() {
        $id = (int)$_GET['id'];
        $order = Orders::getOne($id);
        echo $this->render("allOrders", ['order' => $order]);
    }     
}