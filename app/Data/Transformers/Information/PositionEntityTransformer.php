<?php

namespace App\Data\Transformers\Information;

use \App\Data\Entities\Information\PositionEntity;
use \League\Fractal\TransformerAbstract;

class PositionEntityTransformer extends TransformerAbstract {

	public function transform(PositionEntity $position) {

		return [
			'id' 		=> $position->getId(),
			'name'		=> $position->getName(),
			'links'	=> [
				'self'	=> 'information/positions/' . $position->getId(),
			]
		];

	}

}