<?php

namespace App\Data\Transformers\Information;

use \App\Data\Entities\Information\SectionEntity;
use \League\Fractal\TransformerAbstract;

class SectionEntityTransformer extends TransformerAbstract {

	public function transform(SectionEntity $section) {

		return [
			'id' 		=> $section->getId(),
			'name'		=> $section->getName(),
			'links'	=> [
				'self'	=> 'information/sections/' . $section->getId(),
			]
		];

	}

}