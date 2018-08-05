<?php

namespace App\Data\Extensions;

use League\Fractal\Manager as FractalManager;
use League\Fractal\Resource\Item as FractalItem;

trait Fractal {

	public static function getTransformer() {

		return new self::$transformer;

	}

	public function toJson() {

		if(!$this->getTransformer()) return false;

		$manager = new FractalManager();
		$resource = new FractalItem($this, self::getTransformer());

		return $manager->createData($resource);

	}

}