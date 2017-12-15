<?php
declare(strict_types=1);

namespace Product;

class Cloth implements ProductInterface
{
    /**
     * @var string
     */
    private $color, $brand;

	public function setColor(string $rgb)
	{
		$this->color = $rgb;
	}

	public function setBrand(string $brand)
	{
		$this->brand = $brand;
	}
}