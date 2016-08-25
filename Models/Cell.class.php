<?php
/**
 *
 */
class Cell
{
	/**
	 * class Cell : 
         * to detect cells, what is on,
         * items
         * stickman
         * 
	 */


	/**
	 * @var integer
	 */
	public $iPosX;

	/**
	 * @var integer
	 */
	public $iPosY;

	/**
	 * @var Array of virtual
	 */
	public $aovItems;

	/**
	 * @var Array object
	 */

	public $aoStickmen;



	public function __construct($iPosX,$iPosY)
	{
		$this->iPosX=$iPosX;
		$this->iPosY=$iPosY;
	}

/*
	public function __construct($iPosX,$iPosY; $aovItems)
		{
			$this->iPosX=$iPosX;
			$this->iPosY=$iPosY;
			$this->aovItems = $aovItems; 
		}


	public function __construct($iPosX,$iPosY; $aoStickmen)
		{
			$this->iPosX=$iPosX;
			$this->iPosY=$iPosY;
			$this->aoStickmen = $aoStickmen; 
		}
        

*/

        public function getY(){
			return $this->iPosY;
         
        }
        
        public function getX() {
            return $this->iPosX;
        }


       


}
