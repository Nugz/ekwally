<?php

namespace App\Data\Transformers\Information;

use \App\Data\Entities\Information\SkillEntity;
use \League\Fractal\TransformerAbstract;

class SkillEntityTransformer extends TransformerAbstract {

	protected $availableIncludes = [
		'profile'
	];

	public function transform(SkillEntity $skill) {

		return [
			'id' 		=> $skill->getId(),
			'name'		=> $skill->getName(),
			'links'	=> [
				'self'	=> 'information/skills/' . $skill->getId(),
			]
		];

	}

}