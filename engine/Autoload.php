<?php
namespace app\engine;

class Autoload
{
    //ограниченный вариант с поиском в одной папке
    // public function loadClass($className) 
    // {
    //     include_once "../model/{$className}.php";        
    // }

    //2й вариант - поиск по массиву
    // private $path = [
    //     'model',
    //     'engine'
    // ];

    // public function loadClass($className) {
    //     foreach ($this->path as $path) {
    //         $fileName = "../{$path}/{$className}.php";
    //         var_dump($fileName);
    //         if(file_exists($fileName)) {
    //             include $fileName;
    //             break;
    //         }
    //     }
    // }

     //3й вариант - убрать массив и цикл  (недоделал)

    // public function loadClass($className) { 
    //     var_dump ($className);  
    //     $className = str_replace("\\", '/', $className); 
    //     var_dump ($className);    
    //     $fileName = "../{$className}.php";
    //     include $fileName; 
    //     var_dump ($fileName);
    // }

    public function loadClass($className) { 
        $fileName = str_replace(['app\\','\\'],['../', '/'], $className).".php";
        //$fileName = str_replace(['app\\', '\\'], [DIR_ROOT . '/../', DS], $className) . ".php";
        var_dump($className,$fileName);
        if(file_exists($fileName)) {
            include $fileName;
        }
    }

}