<?php
declare(strict_types=1);

namespace Product;

class ItalianFactory extends ProductFactory
{
	protected function createProduct(string $type): ProductInterface
	{
		switch ($type) {
			case parent::CAR:
				$car = new Car();
				$car->setColor('red');
				$car->setBrand('Ferrari');

				return $car;
			case parent::CLOTH:
				$cloth = new Cloth();
				$cloth->setColor('blue');
				$cloth->setBrand('ZARA');

				return $cloth;
			case parent::SERVICE:
				$service = new Service();
				$service->setBrand('Google');

				return $service;
			default:
				throw new \InvalidArgumentException("$type in not valid.");
				break;
		}
	}
}