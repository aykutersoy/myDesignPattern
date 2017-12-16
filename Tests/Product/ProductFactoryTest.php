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
	public function testToCreateGemanMercedes()
	{
		$factory = new GermanFactory();
		$result = $factory->create(ProductFactory::CAR);

		$this->assertInstanceOf(Mercedes::class,$result);
	}
	public function testToCreateGemanJean()
	{
		$factory = new GermanFactory();
		$result = $factory->create(ProductFactory::CLOTH);

		$this->assertInstanceOf(Jean::class,$result);
	}
	public function testToCreateItalianJean()
	{
		$factory = new ItalianFactory();
		$result = $factory->create(ProductFactory::CLOTH);

		$this->assertInstanceOf(Jean::class,$result);
	}
	public function testToCreateItalianCoffee()
	{
		$factory = new ItalianFactory();
		$result = $factory->create(ProductFactory::SERVICE);

		$this->assertInstanceOf(Coffee::class,$result);
	}

	/**
	 * @expectedException \InvalidArgumentException
	 * @expectedExceptionMessage spaceship is not valid.
	 */
	public function testToCreateInvalidType()
	{
		(new ItalianFactory())->create('spaceship');
	}
}