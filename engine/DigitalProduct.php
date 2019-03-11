<?php

class DigitalProduct extends AbstractProduct
{

    private $quantity = 0;

    public function __construct($idProduct, $title, $price, $quantity)
    {
        parent::__construct($idProduct, $title, $price);
        $this->quantity = $quantity;
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