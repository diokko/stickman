<?php


/**
 * class Arena
 */
class StickmanArena
{	


	/**
	 * @var integer
	 */
	private $iSizeArenaWidth;

	/**
	 * @var integer
	 */
	private $iSizeArenaHeight;

	/**
	 * @var array object
	 */
	public $aoStickmen;

	/**
	 * @var integer
	 */
	private $iMinStickman;

	/**
	 * @var integer
	 */
	private $iMaxStickman;
	
	/**
	 *  @var table of object 
	 */
	private $aArena ; 

	
	public function __construct($iSizeArenaHeight, $iSizeArenaWidth, $iMinStickman, $iMaxStickman){
		
		$this->iSizeArenaWidth = $iSizeArenaWidth;
		$this->iSizeArenaHeight =  $iSizeArenaHeight;
		$this->iMinStickman = iMinStickman; 
		$this->iMaxStickman = iMaxStickman;

		for ($i = 0 ; $i = $this->$iSizeArenaHeight ; $i++){
			for ($j = 0 ; $j = $this->iSizeArenaWidth; $j++){
				$this->aArena[$this->iSizeArenaWidth][$this->iSizeArenaHeight] = null; 
			}
		}  

	}



	/**
	 *
	 */
	public function SpawnStickmen()
	{
		// TODO: implement here
		


	}



	/**
	 *
	 */
	public function SpawnItems()
	{
		// TODO: implement here
	}



	/**
	 *
	 */
	public function getMaxWeaponStrength()
	{
		// TODO: implement here
	}



	/**
	 *
	 */
	public function isFull()
	{
		// TODO: implement here


	}
}
