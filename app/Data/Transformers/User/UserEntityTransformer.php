<?php

namespace App\Data\Transformers\User;

use \App\Data\Entities\User\UserEntity;
use \League\Fractal\TransformerAbstract;

class UserEntityTransformer extends TransformerAbstract {

	protected $availableIncludes = [
		'company'
	];

	public function transform(UserEntity $user) {

		return [
			'id' 		=> $user->getId(),
			'name'		=> $user->getName(),
			'email'		=> $user->getEmail(),
			'type'		=> $user->getType(),
			'links'	=> [
				'self'	=> 'users/' . $user->getId(),
			]
		];

	}

	public function includeCompany(UserEntity $user) {


	}

}