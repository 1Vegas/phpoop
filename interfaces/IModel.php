<?php
namespace app\interfaces;

interface IModel 
{
    //в интерфейсе могут быть только публичные методы.
    public function getOne($id);
    public function getAll();
    public function getTableName();
}