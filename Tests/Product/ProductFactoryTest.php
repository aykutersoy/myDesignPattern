<?php

namespace myDesignPattern\Test\Product;

use myDesignPattern\Product\ProductFactory;
use myDesignPattern\Product\GermanFactory;
use myDesignPattern\Product\ItalianFactory;
use myDesignPattern\Product\TurkishFactory;
use myDesignPattern\Product\Mercedes;
use myDesignPattern\Product\Jean;
use myDesignPattern\Product\Coffee;

use PHPUnit\Framework\TestCase;

class ProductFactoryTest extends TestCase
{
	public function testToCreateMercedes()
	{
		$factory = new GermanFactory();
		$result = $factory->create(ProductFactory::CAR);

		$this->assertInstanceOf(Mercedes::class,$result);
	}
}