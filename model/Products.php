<?php

namespace app\model;

class Products extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;
    protected $tableName = 'products';   
    
    public function getTableName() {
        return $this->tableName;
    }

}
