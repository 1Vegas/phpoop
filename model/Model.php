<?php
namespace app\model;

use app\engine\Db;

use app\interfaces\IModel;

abstract class Model implements IModel 
{    
    protected $db;
    //protected $tableName='';

    public function __construct() {
        $this->db = Db::getInstance();
    }
    

    public function getOne($id) {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";  
        return $this->db->queryOne($sql, [':id'=>$id]);      
    }

    public function getAll() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";  
        return $this->db->queryAll($sql);      
    }

    public function insertProduct($columnNames=[], $values=[]) {
        $tableName = $this->getTableName();        
        $sql = "INSERT INTO {$tableName} ($columnNames) VALUES ($values)";        
    }             
    

    public function deleteProduct() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";  
        return $this->db->queryAll($sql);                      
    }

    public function updateProduct() {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";  
        return $this->db->queryAll($sql);
    }

    abstract public function getTableName();//в наследнике должен быть реализован такой метод
}