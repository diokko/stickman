<?php
class Life implements Attributes{


 public function __construct($init,$current,$min,$max){
    $this->init=$init;
    $this->current=$current;
    $this->min=$min;
    $this->max=$max;
  }

public function __getCurrent(){
  return  $this->current; 
}

  public function getStone() {
    return $this->current++;
  }
  public function getBored() {
    // if ($this->current<=$this->min) {
    //    //appel fonction imDying
    // }
    // else{
     return  $this->current--;
    }
   
  }


}