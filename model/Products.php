<?php

namespace app\model;

class Products extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;
    protected $tableName = 'products';

    public function __construct($name, $description, $price) {
        $this->name= $name;
        $this->$description = $description;
        $this->$price = $price;

    }
    
    public function getTableName() {
        return $this->tableName;
    }

    public function insertProduct() {
        parent::insertProduct(['name', 'description', 'price'], [$this->name, $this->description,$this->price]);
    }
}
