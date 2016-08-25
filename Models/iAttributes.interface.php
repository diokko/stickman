<?php


/**An interface implements methods and not variables
 *
 */
interface Attributes
{
	/**
	 * @var integer
	 */
	public $iCurrent;

	/**
	 * @var integer
	 */
	public $iInit;

	/**
	 * @var integer
	 */
	public $iMax;

	/**
	 * @var integer
	 */
	public $iMin;

	/**
	 * @var enum{strength; life}
	 */
	public $eType;

}
