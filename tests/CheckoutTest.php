<?php

namespace Tests;

use App\Checkout;
use PHPUnit\Framework\TestCase;

/**
 * Class CheckoutTest
 *
 * @package Tests
 */
class CheckoutTest
	extends TestCase
{
	/**
	 *
	 */
	public function test_scanning_sku_a_returns_total_of_50()
	{
		$checkout = new Checkout();
		
		$checkout->scan('A');
		
		$this->assertEquals(50, $checkout->total(), 'Checkout total does not equal expected value of 50');
	}
	
	/**
	 *
	 */
	public function testCanAddMultipleItemsOfSameSKU()
	{
		$checkout = new Checkout();
		$checkout->scan('A'); //50
		$checkout->scan('A'); //50
		$checkout->scan('A'); //50
		// promotion 3 * A => 130
		$this->assertEquals(130, $checkout->total(), 'Checkout total does not equal expected value of 130');
	}
	
	/**
	 *
	 */
	public function testCanAddMultipleItemsOfDifferentSKU()
	{
		$checkout = new Checkout();
		$checkout->scan('A');
		$checkout->scan('A');
		$checkout->scan('A'); // 130 from As
		$checkout->scan('B'); // 30
		$checkout->scan('B'); // 30
		$checkout->scan('B'); // 30
		//should take 2 for special price of 45 + 30 from the separate + 130 from A => 205
		$this->assertEquals(205, $checkout->total(), 'Checkout total does not equal expected value of 205');
	}
	
	/**
	 *
	 */
	public function testCanAddItemsInAnyOrder()
	{
		$checkout = new Checkout();
		$checkout->scan('A');
		$checkout->scan('B'); // 30
		$checkout->scan('A');
		$checkout->scan('B'); // 30
		$checkout->scan('A'); // 130 from As
		
		$checkout->scan('B'); // 30
		$checkout->scan('B'); // 30
		//should take 2x2 for special price of 45 + 45 +  130 from A => 220
		$this->assertEquals(220, $checkout->total(), 'Checkout total does not equal expected value of 220');
	}
}
