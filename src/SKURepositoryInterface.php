<?php

namespace App;

interface SKURepositoryInterface
{
	public static function getByName(string $sku): SKU;
}