<?php

namespace app\engine;

use app\traits\Tsingletone;

class Db 
{
    use Tsingletone;

    private $config = [
        'driver' => 'mysql',
        'host' => 'localhost:3307',
        'login' => 'root',
        'password' => '',
        'database' => 'shop',
        'charset' => 'utf8'
    ];

    private $connection = null;    

    

    // public function getConnection()
    // {
    //     if (is_null($this->connection)) {
    //     $db = mysqli_connect('localhost', $this->config['login'], $this->config['password'], $this->config['database']);
    //     mysqli_query($db, $this->config['charset']);
    //         if($db) {
    //             echo 'Соединение установлено.';
    //         } else {
    //             die('Ошибка подключения к серверу баз данных.');
    //         }
    //     }
    //     return $this->connection;
    // }

    private function getConnection() {
        if (is_null($this->connection)) {
            $this->connection = new \PDO($this->prepareDSNstr(),
                $this->config['login'],
                $this->config['password']
            );
              var_dump("Подключаемся к БД");
              $this->connection->setAttribute(
                \PDO::ATTR_DEFAULT_FETCH_MODE,
                 \PDO::FETCH_ASSOC);
        }
        return $this->connection;
    }

    private function prepareDSNstr() 
    {
        return sprintf("%s:host=%s;dbname=%s;charset=%s",
            $this->config['driver'],
            $this->config['host'],
            $this->config['database'],
            $this->config['charset']
        );
    }

    //для PDO:    
    private function query($sql, $params)
    {
        $pdoStatement = $this->getConnection()->prepare($sql);
        $pdoStatement->execute($params);
        return $pdoStatement;
    }

    
    //для PDO:   
    public function execute($sql, $params)
    {
        $this->query($sql, $params);
        return true;
    }   


    //для PDO:   
    public function queryOne ($sql, $param = []) {
        return $this->queryAll($sql, $param)[0];
    }
    public function queryAll ($sql, $param = []) {
        return $this->query($sql, $param)->fetchAll(); 
    }

}
