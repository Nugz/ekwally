<?php

namespace App\Data\Repositories\User;

interface UserRepositoryInterface {

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