<?php
class Weapon implements Items{

public $idWeapon;
public $damage;

 public function __construct($name,$price){
    $this->name=$name;
    $this->price=$price;
  }

  public function shot($idStickman) {

      if ($this->idStickman != $idStickman){
           //décrémente vie de l'autr
          //$idStickman.attributes
          //incrémente nos points de dégat 
          return  " shoot!!" ; 
         
      }
     

      
   return null ;
  }



}