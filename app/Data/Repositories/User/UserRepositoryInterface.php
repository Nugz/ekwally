<?php

namespace App\Data\Repositories\User;

use Doctrine\Common\Persistence\ObjectRepository;

interface UserRepositoryInterface extends ObjectRepository {

	/**
	 * @param $id
	 * @return \App\Data\Entities\User\UserEntity
	 */
	public function find($id);


	/**
	 * @param \App\Data\Entities\Company\CompanyEntity $company
	 * @return mixed
	 */
	public function findByCompany($company);

}