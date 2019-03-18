<?php

namespace app\model;

class Orders extends DbModel
{
    public $id;
    public $product;
    public $product_id;
    public $price;
    public $quantity;
    public $f_name;
    public $s_name;
    public $address;
    public $post_index;
    public $email;
    public $date;
    public $time;
    
    public function __construct($id=null, $product=null, $product_id=null, $price=null, $quantity=null,$f_name = null, $s_name = null, $address=null,
    $post_index=null, $email = null, $date = null, $time = null )
    {
        //parent::__construct();
        $this->id = $id;
        $this->product = $product; 
        $this->product_id = $product_id;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->f_name = $f_name;
        $this->s_name = $s_name;
        $this->address = $address;
        $this->post_index = $post_index;
        $this->email = $email;
        $this->date = $date;
        $this->time = $time;
    }
    
    public static function getTableName() {
        return "orders";
    }

}