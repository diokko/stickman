<?php


/**An interface implements methods and not variables
 *
 */
interface Items
{
	/**
	 * @var string
	 */
	public $sName;

	/**
	 * @var integer
	 */
	public $iPrice;

	/**
	 * @var enum{weapon; potion}
	 */
	public $eType;
}
