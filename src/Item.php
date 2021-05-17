<?php

namespace App;

class Item
{
	/**
	 * @var SKU
	 */
	public SKU $sku;
	public int $quantity;
	
	/**
	 * Item constructor.
	 *
	 * @param  SKU  $sku
	 * @param  int  $quantity
	 */
	public function __construct(SKU $sku, int $quantity)
	{
		$this->sku      = $sku;
		$this->quantity = $quantity;
	}
}