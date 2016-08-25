<?php

class Weed implements Items {

    public $potion ; 
    public $heal; 

    public function __construct( $potion, $heal){
        $this->potion = $potion; 
        $this->heal = $heal; 
    }
/***
* function bong give life to stickman 
* @param none
*  @return 
*
*/
  
    public function bong(){
          return $this->getStone();   
    }
    


}