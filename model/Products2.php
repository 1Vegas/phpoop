<?php

namespace app\model;

class Products2 extends DbModel
{
    public $id;
    public $title;
    public $description;
    public $price;
    public $image;
    public $category;
    
    public function __construct($id=null, $title=null, $description=null, $price=null, $image=null, $category=null)
    {
        //parent::__construct();
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
    
    public static function getTableName() {
        return "products2";
    }

}
