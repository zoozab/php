<?php
echo "the fruits class ";
echo "<br>";
class fruits {
    public $name ;
    public $color;
    public function __construct($name,$color){
        $this->name=$name;
        $this->color=$color;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_color(){
        return $this->color;
    }
}
$apple=new fruits("apple","red");
echo "the fruit is : " .$apple->get_name();
echo "<br>";
echo "the color is : " . $apple->get_color();
echo "<br>";
var_dump($apple instanceof fruits);


