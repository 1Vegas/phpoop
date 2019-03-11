<?php
include ('funcs.php');
class CarRequests {
    protected $factory;    
    function __construct($factory = "Bmw")
    {
        $this->factory = $factory;       
    }    

    public function decode() {
        $j = @file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data.json' );                   
        $data = json_decode($j);
        foreach($data as $key => $value) { 
            if($key == $this->factory) {      
            //echo '<div class="row"><div class="span6">'.$key.'</div><div class="span3">'.$value->model.'</div><div class="span3">'.$value->modification.'</div></div><hr>';
            return render($key, $value);
            }
            
        }   
    }   
}

class NewCar extends CarRequests {
    public $color;
    function __construct($factory = null, $color = 'розовый')
    {
        parent::__construct($factory);
        $this->color = $color;
    }
    public function displayInfo() {
        parent::decode();
        echo "<li class='list-group-item list-group-item-primary container'>цвет: {$this->color}</li>";        
    }
}

$car = new CarRequests();
$car->decode();

$audi = new NewCar('Audi', 'синий');
$audi->displayInfo();