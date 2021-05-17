<?php

namespace App;

/**
 * Class Discount
 *
 * @package App
 */
class Discount
{
	/**
	 * @var string
	 */
	public string $skuName;
	/**
	 * @var int
	 */
	public int $quantity;
	/**
	 * @var int
	 */
	public int $price;
	
	/**
	 * Discount constructor.
	 *
	 * @param  string  $skuName
	 * @param  int     $quantity
	 * @param  int     $price
	 */
	public function __construct(string $skuName, int $quantity, int $price)
	{
		$this->skuName = $skuName;
		$this->quantity = $quantity;
		$this->price = $price;
	}
}