<?php
namespace app\model;

use app\engine\Db;

use app\interfaces\IModel;

abstract class DbModel extends Models implements IModel 
{    
    /**
     * @var Db
     */
    /*
    protected $db;    

    public function __construct() {
        $this->db = Db::getInstance();
    }   
    */ 

    public static function getOne($id) {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";  
        return Db::getInstance()->queryObject($sql, ['id'=>$id], static::class);   
    }

    public static function getAll() {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}";  
        return Db::getInstance()->queryAll($sql);      
    }

    public function insert() {
        $params = [];
        $columns= [];
        foreach($this as $key => $value) {
            if($key == "id") continue;
            $params[":{$key}"] = $value;
            $columns[] = $key;
        }
          
        $columns = implode(", ", $columns);
        $values = implode(", ", array_keys($params));
        $tableName = static::getTableName();
         
        $sql = "INSERT INTO {$tableName} ({$columns}) VALUES ({$values})";
        Db::getInstance()->execute($sql, $params);
        $this->id = Db::getInstance()->lastInsertId();
    }

    public function update() { 
         $params = [];
         $columns= [];
         $thirdArray=[];
        foreach($this as $key => $value) {

            //if($key == "id") continue; //игнорируем поле "id" в БД 
             $params[":{$key}"] = $value;
             $columns[] = $key;
                   
        }    
        $thirdArray= array_combine ($columns, $params);
        var_dump($thirdArray);
        $stringThirdArray = implode(", ", $columns);  
        
        // $columns = implode(", ", $columns);
        // $values = implode(", ", array_keys($params));
        // var_dump($values, $columns);
        $tableName = static::getTableName();
        
        
                
        $sql = "UPDATE {$tableName} SET ({$stringThirdArray}) WHERE id = :id";
        var_dump($sql);
        Db::getInstance()->execute($sql, ['id'=>$this->id]);
        $this->id = Db::getInstance()->lastInsertId();
        
    }
    

    public function delete() {
        $tableName = static::getTableName();
        $sql = "DELETE FROM {$tableName} WHERE id = :id";
        return Db::getInstance()->execute($sql, ['id'=>$this->id]);
    }

    public function save() {
        if (is_null($this->id)) 
            $this->insert();            
         else 
            $this->update();
        

    }
  

    abstract public static function getTableName();//в наследнике должен быть реализован такой метод
}