<?php
class Lancers{
    private $Lancers;
     
    public function __construct()

    {
        $this->lancers=0;
        
    }
    public function getLancers(){
        return $this->lancers;
    }
    public function close(){
        if($this->lancers<15){
            $this->lancers=$this->lancers+15;
        }else{
            $this->lancers=$this->lancers-15;
        }
    }
    public function far(){
        if($this->lancers<30){
            $this->lancers=$this->lancers+30;
        }else{
            $this->lancers=$this->lancers-30;
        }
    }
    public function veryFar(){
        if($this->lancers<50){
            $this->lancers=$this->lancers + 50;
        }else{
            $this->lancers=$this->lancers -50;
        }
    }
}

$size=new Lancers();
echo $size->getLancers().' : lancer size at the moment<br>';
$size->close();
echo $size->getLancers().' : lancer size in the close distance mood <br>';

$size=new Lancers();
$size->far();
echo $size->getLancers().' : lancer size in the far distance mood <br>';

$size= new Lancers();
$size->veryFar();
echo $size->getlancers().' : lancer size in the very far distance mood <br>';
