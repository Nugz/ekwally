<?php

namespace App\Data\Repositories\User;

interface UserRepositoryInterface {

	public function find($id);

	/*
	 * Finds all users from company
	 *
	 * @param \App\Data\Entities\Company\CompanyEntity $company
	 *
	 */
	public function findByCompany($company);

}