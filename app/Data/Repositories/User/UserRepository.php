<?php

namespace App\Data\Repositories\User;

use Doctrine\ORM\EntityRepository;



class UserRepository extends EntityRepository implements UserRepositoryInterface {

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