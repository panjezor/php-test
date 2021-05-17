<?php

namespace App;

/**
 * Class Checkout
 *
 * @package App
 */
class Checkout
	implements CheckoutInterface
{
	/**
	 * @var Item[]
	 */
	private $basket = [];
	
	/**
	 * Adds an item to the checkout
	 *
	 * @param $sku string
	 *
	 * @return bool
	 * @todo Implement unscan method.
	 *
	 */
	public function scan(string $sku): bool
	{
		$skuModel = SKURepository::getByName($sku);
		$this->addToBasket($skuModel);
		
		return true; //I am a fan of returning something, just in case someone cares.
	}
	
	/**
	 * @param  SKU  $sku
	 *
	 * @return Item|int
	 */
	public function addToBasket(SKU $sku)
	{
		if (isset($this->basket[$sku->name])) {
			return ++$this->basket[$sku->name]->quantity;
		}
		
		return $this->basket[$sku->name] = new Item($sku, 1);
	}
	
	/**
	 * Calculates the total price of all items in this checkout
	 *
	 * @return int
	 *
	 */
	public function total(): int
	{
		$total = 0;
		foreach ($this->basket as $item) {
			$total += DiscountHelper::getTotalForItem($item);
		}
		
		return $total;
	}
}
