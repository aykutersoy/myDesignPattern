<?php
declare(strict_types=1);

namespace myDesignPattern\Product;

class TurkishFactory extends ProductFactory
{
	protected function createProduct(string $type): ProductInterface
	{
		switch ($type) {
			case parent::CAR:
				$car = new Mercedes();
				$car->setColor('black');

				return $car;
			case parent::CLOTH:
				$cloth = new Jean();
				$cloth->setColor('red');

				return $cloth;
			case parent::SERVICE:
				return new Coffee();
			default:
				throw new \InvalidArgumentException("$type is not valid.");
				break;
		}
	}
	protected function destroyProduct(string $type): ProductInterface
	{

	}
}