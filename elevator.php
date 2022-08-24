<?php
class Elevator{
    public $floor;

    public function __construct()
    {
        $this->floor=0;
    }
    public function getFloor(){
        echo "you are in the floor :".$this->floor;
    }
    public function firstfloor(){
        if($this->floor=1){
            return "you are in first floor";
        }else{
            $this->floor=$this->floor=1;
            
        }
    }
        public function secondfloor(){
        if($this->floor=1){
            return "you are in second floor";
        }else{
            $this->floor=$this->floor=2;
            
        }
    }
        public function thirdfloor(){
        if($this->floor=1){
            return "you are in third floor";
        }else{
            $this->floor=$this->floor=3;
            
        }
    }
    
}

$level=new Elevator();
echo $level->getFloor();
echo "<br>";
$level->firstfloor();
echo $level->getFloor()."<br>";
$level->secondfloor();
echo $level->secondfloor()."<br>";
$level->thirdfloor();
echo $level->thirdfloor()."<br>";
$level->firstfloor();
echo $level->getFloor()."<br>";