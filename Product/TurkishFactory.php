<?php
declare(strict_types=1);

namespace Product;

class TurkishFactory extends ProductFactory
{
	protected function createProduct(string $type): ProductInterface
	{
		switch ($type) {
			case parent::CAR:
				$car = new Car();
				$car->setColor('white');
				$car->setBrand('TOFAS');

				return $car;
			case parent::CLOTH:
				$cloth = new Cloth();
				$cloth->setColor('black');
				$cloth->setBrand('YKM');

				return $cloth;
			case parent::SERVICE:
				$service = new Service();
				$service->setBrand('HILTON');

				return $service;
			default:
				throw new \InvalidArgumentException("$type in not valid.");
				break;
		}
	}
}