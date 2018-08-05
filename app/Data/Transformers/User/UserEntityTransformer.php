<?php

namespace App\Data\Transformers\User;

use \App\Data\Entities\User\UserEntity;
use \App\Data\Entities\User\ProfileEntity;
use \League\Fractal\TransformerAbstract;

class UserEntityTransformer extends TransformerAbstract {

	protected $availableIncludes = [
		'profile'
	];

	public function transform(UserEntity $user) {

		return [
			'id' 			=> $user->getId(),
			'name'			=> $user->getName(),
			'email'			=> $user->getEmail(),
			'type'			=> $user->getType(),
			'links'	=> [
				'self'	=> 'users/' . $user->getId(),
			]
		];

	}

	public function includeProfile(UserEntity $user) {

		$profile = $user->getProfile();

		if($profile && $profile->getId())
			return $this->item($profile, ProfileEntity::getTransformer());

	}

}