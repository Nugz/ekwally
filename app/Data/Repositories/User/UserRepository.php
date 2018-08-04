<?php

namespace App\Data\Repositories\User;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class UserRepository extends EntityRepository Implements UserRepositoryInterface {

	/*
	 * Finds all users from company
	 *
	 * @param int $companyId
	 *
	 */
	public function findByCompany($company) {

		return $this->findBy(array('companyEntity' => $company));

	}

}