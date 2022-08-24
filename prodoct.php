<?php
class Product{
    public $price;
    public $inventory;

    public function __construct($price,$inventory)
    {
        $this->price=$price;
        $this->inventory=$inventory;
        
    }
    public function costControl(){
        if($this->price<100){
            echo "this prodoct is okey to be selled.<br>";
        }else{
            $y=($this->price)-100;
            echo "the price should be $y lower <br>";
        }
    }
    public function inventoryCheck(){
        if($this->inventory<10){
            echo "this prodoct inventory is going to be empty , please recharge it.<br>";
        }else{
            echo 'you can order your prodoct the inventory is not empty<br>';
        }
    }

    public static function check(){
        return 'checked';
    }
}


$cc = new Product(140,8);
echo $cc->costControl();
echo $cc->inventoryCheck();
