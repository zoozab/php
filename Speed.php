<?php
class Speed {
    private $speed;

    public function __construct()
    {
        $this->speed=0;
        
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function one(){
        if($this->speed < 10){
            // we are going to add gear
            $this->speed = $this->speed + 10;
        }else{
            $this->speed = $this->speed - 10;
        }
    }

    public function two(){
        if($this->speed < 20){
            // we are going to add gear
            $this->speed = $this->speed + 20;
        }else{
            $this->speed = $this->speed - 20;
        }
    }
    public function three(){
        if ($this->speed<40){
            $this->speed=$this->speed + 40 ;
        }
        else{
            $this->speed =$this->speed-40;
        }
    }
    public function four(){
        if($this->speed<60){
            $this->speed= $this->speed+60;
        }else{
            $this->speed=$this->speed -60;
        }   
     }
     public function five(){
        if($this->speed<80){
            $this->speed=$this->speed+80;
        }
        else{
            $this->speed=$this->speed-80;
        }
     }
     public function six(){
        if($this->speed<100){
            $this->speed=$this->speed +100;
        }else{
            $this->speed=$this->speed-100;
        }
     }

    
}

$car = new Speed();
echo $car->getSpeed(). ': initial speed<br/>';
$car->one();
echo $car->getSpeed() .': gear one speed';
echo "<br>";



$car->two();
echo $car->getSpeed().': second gear speed';
echo '<br>';


$car->three();
echo $car->getSpeed().': third gear speed ';
echo "<br>";


$car->four();
echo $car->getSpeed().' : four gear speed <br>';


$car->five();
echo $car->getSpeed().': five gear speed <br>';


 $car->six();
 echo $car->getSpeed().': six gear speed <br>';

 $car->five();
 echo $car->getSpeed();

