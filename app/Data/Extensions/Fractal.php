<?php

namespace App\Data\Extensions;

use League\Fractal\Manager as FractalManager;
use League\Fractal\Resource\Item as FractalItem;

trait Fractal {

	protected $_includes = [];

	public static function getTransformer() {

		return new self::$transformer;

	}

	public function with($includes) {

		if(!is_array($includes)) $includes = array($includes);

		$this->_includes = array_merge($this->_includes, $includes);

		return $this;

	}

	public function toJson() {

		if(!$this->getTransformer()) return false;

		$manager = new FractalManager();
		$resource = new FractalItem($this, self::getTransformer());
		$manager->parseIncludes(implode(',', $this->_includes));

		return $manager->createData($resource)->toJson();

	}

}