<?php
class Strength implements Attributes{


 public function __construct($init,$current,$min,$max){
    $this->init=$init;
    $this->current=$current;
    $this->min=$min;
    $this->max=$max;
  }

public function __getCurrent(){
  return  $this->current; 
}

/*+ point de force*/
  public function proteinShot() {
    return $this->current++;
  }

  /*- point de force*/
  public function anemia() {
    // if ($this->current<=$this->min) {
    //    //appel fonction imDying
    // }
    // else{
     return  $this->current--;
    }
   
  }


}