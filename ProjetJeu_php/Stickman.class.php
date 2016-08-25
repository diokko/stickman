<?php
class Stickman implements Attributes,Items{
   public $items = array();  // aovitems : Array of vitual items
   public $attributes = array(); // aovitems : Array of vitual attributes
   public $actionPoint;  
   public $movePoint;
   public $points;
   public $name;
   public $victories;
   public $defeats;


   public function __construct($name){
       $this->actionPoint=5;
       $this->item = array('weapon' => new Weapon() , 
                          'weed'  => new Weed() );
       // $this->attribute = new array 

       $this->movePoint = 1 ; 
       $this->points = 0 ; 
       $this->name = $name;
       $this->victories = 0;
       $this->defeats = 0 ;

   }


   public function getPos(){
       return  $this->cell; 
   }

    public function move($x, $y) {
        $this->cell.posX =+ $x; 
        $this->cell.posY =+ $y;  

    }
    public function look() {
    return $this->
        
    }

    public function protect() {
        return $this->geStone(); 
    }

    public function attack($idStickman) {
        if($actionPoint>0){
            //            
            $this->shot($idStickman);
            $this->points = 1; 
            //$this->damage++;
//             $this->actionPoint=$this->actionPoint-1;
        }
       
    }

    public function grab($idItem) {
    }
    
    public function use($idItem) {
    }

    public function leave() {
    }

    private function imDying() {
    }

}

