<?php

namespace App;

/**
 * Interface DiscountRepositoryInterface
 *
 * @package App
 */
interface DiscountRepositoryInterface
{
	/**
	 * @param  string  $sku
	 *
	 * @return mixed
	 */
	public static function getBySku(string $sku);
	
	/**
	 * @return array
	 */
	public static function all(): array;
}