<?php


/**
 *
 */
class Life implements iAttributes
{
	/**
	 * @var 
	 */

	public static $eType = array("strength" => 0, "life"=> 1 ); 

	public function __construct($iInit, $icurrent,$iMin, $iMax)
	{
		$this->iInit = $iInit;
		$this->iCurrent = $iCurrent;
		$this->iMin = $iMin;
		$this->iMax = $iMax;
		$this->eType = $eType;  

	}

	/**
	 *
	 */
	public function getStone()
	{
		// TODO: implement here : life ++
		return $this->iCurrent++; 

	}

	/**
	 *
	 */
	public function getBored()
	{
		// TODO: implement here : life --

		return $this->iCurrent--; 

	}
}
