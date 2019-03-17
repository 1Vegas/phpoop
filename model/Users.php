<?php
namespace app\model;

class Users extends DbModel
{
    public $id;
    public $login;
    public $pass;
    protected $tableName = 'users'; 

    public function __construct($id = null, $login = null, $pass = null)
{
    $this->id = $id;
    $this->login = $login;
    $this->pass = $pass;
}
    
    public static function getTableName() {
        return "users";
    }
}