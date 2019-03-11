<?php


class ProductHandler
{
    use Singleton;

    private $goods = [];

    public function showHistorySales()
    {
        //общий рендеринг        
    }

    public function addProduct(AbstractProduct $product){
        $this->goods[] = $product;
    }

}