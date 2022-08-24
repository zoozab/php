<?php
echo "the trees class : ";
echo "<br>";
class trees {
    public $name;
    public $age ;
    public function set_name($name){
        $this->name=$name;
    }
    public function get_name(){
        return $this-> name;
    }
    public function set_age($age){
        $this->age =$age;
    }
    public function get_age(){
        return $this->age ;
    }

    }
    
    $kaj = new trees();
    $kaj->set_name("kaj");
    $kaj->set_age("old");
    echo "tree name is : " . $kaj->get_name();
    echo "<br>";
    echo "this tree is :" . $kaj->get_age();
      echo "<br>";
    echo "the dog class : ";
  
class dog{
    public $name;
    public $color;
    public $size;
     public function set_name($name){
     $this->name=$name;
     }
     public function get_name(){
            return $this->name;
        }
        public function set_color($color){
            $this->color=$color;
        }
        public function get_color(){
            return $this->color;
        }
        public function set_size($size){
            $this->size=$size;
        }
        public function get_size(){
           return $this->size;
        }
    }

    $german=new dog();
    $german->set_name("german");
    $german->set_color("black");
    $german->set_size("normal");
    echo "<br>";
    echo "the dog name is : " .$german-> get_name();
    echo "<br>";
    echo "the dog color is : " . $german->get_color();
    echo "<br>";
    echo "the dog size is : " .$german->get_size();
?>