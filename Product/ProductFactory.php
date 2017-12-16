<?php
declare(strict_types=1);

namespace myDesignPattern\Product;

abstract class ProductFactory
{

	const CAR = 'car';
	const CLOTH = 'cloth';
	const SERVICE = 'service';

	abstract protected function createProduct(string $type): ProductInterface;
	abstract protected function destroyProduct(string $type): ProductInterface;

	public function create(string $type): ProductInterface
	{
		$obj = $this->createProduct($type);

		return $obj;
	}
	public function destroy(string $type): ProductInterface
	{
		$obj = $this->destroyProduct($type);

		return $obj;
	}
}