<?php

class WeightedProduct extends AbstractProduct
{

    private $weight = 0;

    public function __construct($idProduct, $title, $price, $weight)
    {
        parent::__construct($idProduct, $title, $price);
        $this->weight = $weight;
        $this->calculateTotalPrice();
    }

    public function render()
    {
        //рендеринг
    }

    protected function calculateTotalPrice()
    {
        //формула расчета
    }


}