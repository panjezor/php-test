<?php

namespace App;

/**
 * Class DiscountRepository
 *
 * @package App
 */
class DiscountRepository
{
	/**
	 * @param  string  $sku
	 *
	 * @return Discount|null
	 */
	public static function getBySku(string $sku)
	{
		switch ($sku) {
			case 'A':
				return static::all()[0];
			case 'B':
				return static::all()[1];
			default:
				return null;
		}
	}
	
	/**
	 * @return Discount[]
	 */
	public static function all(): array
	{
		return [
			new Discount('A', 3, 130),
			new Discount('B', 2, 45),
		];
	}
}