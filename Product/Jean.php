<?php
declare(strict_types=1);

namespace myDesignPattern\Product;

class Jean implements ProductInterface
{
    /**
     * @var string
     */
    private $color;

	public function setColor(string $rgb)
	{
		$this->color = $rgb;
	}
}