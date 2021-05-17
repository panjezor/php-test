<?php

namespace App;

/**
 * Class SKU
 *
 * @package App
 */
class SKU
{
	/**
	 * @var string
	 */
	public string $name;
	/**
	 * @var int
	 */
	public int $price;
	
	/**
	 * SKU constructor.
	 *
	 * @param  string  $name
	 * @param  int     $price
	 */
	public function __construct(string $name, int $price)
	{
		$this->name  = $name;
		$this->price = $price;
	}
}