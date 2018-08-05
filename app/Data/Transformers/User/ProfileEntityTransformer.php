<?php

namespace App\Data\Transformers\User;

use \App\Data\Entities\User\ProfileEntity;
use \League\Fractal\TransformerAbstract;

class ProfileEntityTransformer extends TransformerAbstract {

	public function transform(ProfileEntity $profile) {

		return [
			'id' 			=> $profile->getId(),
			'salaris_min'	=> $profile->getSalarisMin(),
			'salaris_max'	=> $profile->getSalarisMax(),
			'links'	=> [
				'self'	=> 'users/profile/' . $profile->getId(),
			]
		];

	}

}