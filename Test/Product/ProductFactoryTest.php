<?php

namespace Test\Product;

use Product\ProductFactory;
use Product\GermanFactory;
use Product\ItalianFactory;
use Product\TurkishFactory;
use Product\Car;
use Product\Cloth;
use Product\Service;

use PHPUnit\Framework\TestCase;

class ProductFactoryTest extends TestCase
{
	public function testToCreateCar()
	{
		$factory = new GermanFactory();
		$result = $factory->create(ProductFactory::CAR);

		$this->assertInstanceOf(Car::class,$result);
	}
}