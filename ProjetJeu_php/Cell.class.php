<?php
class Cell {


private $posX  ; 
private $posY ; 
public $items  = array() ; // array of items ( weapons , weeds)
public $stickmen = array(); // array object stickmen 



public function __construct(){
    $this->posX = $posX; 
    $this->posY = $posY; 
}
public function __construct($posX, $posY,$items){
    $this->posX = $posX; 
    $this->posY = $posY; 
    $this->items = array(new weapon(),new Stickman()); 
}


public function __construct($posX, $posY,$items){
    $this->posX = $posX; 
    $this->posY = $posY; 
    $this->items = array(new weapon(),new Stickman()); 
}

}



