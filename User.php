<?php
class User{

    public $name;
    public $password;
   
    
    public function __construct($name = 'Test user',$password = 1234)
    {
        $this->name=$name;
        $this->password=$password;
        
    }
    public function getName(){
        return "the name is ". $this->name;
    }
    public function getPass(){
        return "the password is : ". $this->password;
    }
    public function profile(){
        echo $this->getName().' : is the user name <br>' ;
        echo $this->getPass().' : is the user passeord <br>';
        
    }

    }

    /**
     * profile
     * deactivate
     * block
     * change password
     * checkout
     */



class jack extends User{
    public $height;
    public function __construct($height)
    {
        parent::__construct();
        $this->height=$height;
    } 
    public function getHeight(){
        return $this->height;
    }
    public function heightlimitter(){
        if($this->height > 170){
            echo "he/she is tall enough.<br>";
        }else{
            $y=170-($this->height);
            echo "she/he should be $y taller.<br>";
        }
    }
}
$uname=new User("jack",12121212);
$uname->profile();
$userheight = new jack(150);
echo "<br>";
echo $userheight->getHeight().' : the user height<br>';
echo $userheight->heightlimitter();
echo "<br>";
echo $userheight->getName();
echo "<br>";
echo $userheight->getPass();

