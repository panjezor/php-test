<?php

namespace App;

use Error;

class SKURepository implements SKURepositoryInterface
{
	public static function getByName(string $sku): SKU
	{
		switch ($sku) {
			case 'A':
				return new SKU('A',50);
			case 'B':
				return new SKU('B',30);
			case 'C':
				return new SKU('C',20);
			case 'D':
				return new SKU('D',15);
			default:
				throw new Error("The SKU $sku is not valid. Error 404",404);
		}
	}
}