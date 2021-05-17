<?php

namespace App;

/**
 * Interface CheckoutInterface
 *
 * @package App
 */
interface CheckoutInterface
{
    /**
     * Adds an item to the checkout
     *
     * @param $sku string
     */
    public function scan(string $sku);

    /**
     * Calculates the total price of all items in this checkout
     *
     * @return int
     */
    public function total(): int;
	public function addToBasket(SKU $sku);

	

}
