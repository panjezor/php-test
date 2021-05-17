<?php

namespace App;

/**
 * Class DiscountHelper
 *
 * @package App
 */
class DiscountHelper
{
	/**
	 * @param  Item  $item
	 *
	 * @return int
	 */
	public static function getTotalForItem(Item $item)
	{
		$discount = DiscountRepository::getBySku($item->sku->name);
		if ($discount) { // we have a match
			$count         = floor($item->quantity / $discount->quantity);
			$extra         = $item->quantity % $discount->quantity;
			$discountTotal = $count * $discount->price;
			$extraTotal    = $extra * $item->sku->price;
			
			return $discountTotal + $extraTotal;
		}
		
		// we dont have a match
		return $item->quantity * $item->sku->price;
	}
}