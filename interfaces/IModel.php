<?php
namespace app\interfaces;

interface IModel 
{
    //в интерфейсе могут быть только публичные методы.
    public static function getOne($id);
    public static function getAll();
    public static function getTableName();
}