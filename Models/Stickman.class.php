<?php


/**
 * class Stickman
 */
class Stickman implements VAttributes , VItems
{
	/**
	 * @var Array of virtual items
	 */
	public $aovItems;

	/**
	 * @var Array of virtual attributes
	 */
	public $aovAttributes;

	/**
	 * @var integer
	 */
	public $iActionPoint;

	/**
	 * @var integer
	 */
	public $iMovePoint;

	/**
	 * @var integer
	 */
	public $iPoints;

	/**
	 * @var string
	 */
	public $sName;

	/**
	 * @var integer
	 */
	public $iVictories;

	/**
	 * @var integer
	 */
	public $iDefeats;

	/**
	 * @param void $int x; int y
	 */



	 /**
	 *   constructor 
	 * @var 
	 *  $name string : name of stickman 
	 */
	public function __construct($sname,)
	{
		// $this->iActionPoint=5;
		// $this->iMovePoint=3;
		$this->sName = $sname;
	}

	public function move($x,$y)
	{
		// TODO: implement here	
		if ($this->iActionPoint>0 && $iMovePoint>0){
		//reduce actionPoint
		$iActionPoint=$iActionPoint-1;
		$iMovePoint=$iMovePoint-1;
		}
		else{
			return null;
		}
	}

	/**
	* @param $cellTarget object 
	 * @var object cell  : 
	 */
	public function look($cellTarget)
	{		
		// TODO: implement here

		//$actionReturn = 1 ; 

		//Verify if $iActionPoint!=0
		
		if($iActionPoint > 0 && $iLookPoint!=0 ){
			//reduce actionPoint
			$iActionPoint=$iActionPoint-1;
			$iLookPoint=0;
		}
		else{
			return null;
		}

	
	}

	/**
	 *
	 */
	public function protect()
	{
		 $iProtectPoint = 1 ;  

		// TODO: implement here
		 isActionPoint>0 ? $iActionPoint = $iActionPoint-1 : null ; 
		
	}

	
	/**
	 * @param void $int idStickman
	 */
	public function attack($idStickman)
	{
		// TODO: implement here

		if($iActionPoint > 0 ){
			$iActionPoint=$iActionPoint-1;	
		}
		return $id

	}

	/**
	 * @param void $int idItem
	 */
	public function grab($idItem)
	{
		// TODO: implement here
	}

	/**
	 * @param void $int idItem
	 */
	public function useItems($idItem)
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	public function leave()
	{
		// TODO: implement here
	}

	/**
	 *
	 */
	private function imDying()
	{
		// TODO: implement here

	}

	/**
	 *
	 */
	public function getPos()
	{
		// TODO: implement here
	}
}
