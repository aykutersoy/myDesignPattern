<?php
declare(strict_types=1);

namespace Product;

class GermanFactory extends ProductFactory
{
	protected function createProduct(string $type): ProductInterface
	{
		switch ($type) {
			case parent::CAR:
				$car = new Car();
				$car->setColor('black');
				$car->setBrand('Mercedes');

				return $car;
			case parent::CLOTH:
				$cloth = new Cloth();
				$cloth->setColor('red');
				$cloth->setBrand('GAP');

				return $cloth;
			case parent::SERVICE:
				$service = new Service();
				$service->setBrand('AWS');

				return $service;
			default:
				throw new \InvalidArgumentException("$type in not valid.");
				break;
		}
	}
}