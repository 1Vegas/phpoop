<?php
namespace app\controllers;

use app\model\Products;
use app\model\Basket;

// отвечает за маршрутизацию адресной строки
class ProductController extends Controller
{
    

    public function actionApicatalog() {

        $catalog = Products::getAll();

        header('Content-Type: application/json');
        echo json_encode(['goods'=>$catalog], JSON_NUMERIC_CHECK | JSON_UNESCAPED_UNICODE);
    }
    
    public function actionIndex() {
        if ($_GET['action']=='Купить') {
            (new Basket(null, session_id(), $_GET['id']))->save();
            header("Location: /");
        }

        $catalog = Products::getAll();
        echo $this->render("catalog",['catalog' => $catalog]);
    }

    public function actionAddBasket() {
        if ($_GET['action']=='Купить') {
            (new Basket(null, session_id(), $_GET['id']))->save();
            header("Location: /");
        }
    } 

    public function actionCard() {
        $id = (int)$_GET['id'];
        $product = Products::getOne($id);        
        echo $this->render("card", ['product' => $product]);
    }     
}