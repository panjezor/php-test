<?php

namespace App;

class Checkout implements CheckoutInterface
{
    /**
     * Adds an item to the checkout
     *
     * @todo Implement scan() method.
     *
     * @param $sku string
     */
    public function scan(string $sku)
    {
        //
    }

    /**
     * Calculates the total price of all items in this checkout
     *
     * @todo Implement total() method.
     *
     * @return int
     */
    public function total(): int
    {
        return 0;
    }
}
