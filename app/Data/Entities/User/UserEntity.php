<?php

namespace App\Data\Entities\User;

use App\Data\Extensions\Fractal;
use Doctrine\ORM\Mapping as ORM;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use LaravelDoctrine\ORM\Auth\Authenticatable;
use LaravelDoctrine\Extensions\Timestamps\Timestamps;
use LaravelDoctrine\ORM\Notifications\Notifiable;
use App\Data\Transformers\User\UserEntityTransformer;
/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class UserEntity extends \App\Data\Entities\MainEntity implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, Timestamps, Notifiable, Fractal;

	static $transformer = UserEntityTransformer::class;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
	protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
	protected $name;

    /**
     * @ORM\Column(type="string", unique=true, length=150, nullable=false)
     */
	protected $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=25, nullable=false, options={"default":"user"})
     */
    protected $type;

    /**
     * @ORM\ManyToOne(targetEntity="App\Data\Entities\Company\CompanyEntity", inversedBy="userEntity")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $companyEntity;

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param string $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * @param string $password
	 */
	public function setPassword($password) {
		$this->password = $password;
	}

	/**
	 * @return mixed
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param string $type
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * @return \App\Data\Entities\Company\CompanyEntity $companyEntity
	 */
	public function getCompany() {
		return $this->companyEntity;
	}

	/**
	 * @param \App\Data\Entities\Company\CompanyEntity $companyEntity
	 */
	public function setCompanyEntity($companyEntity) {
		$this->companyEntity = $companyEntity;
	}

	public function authorizeType($type) {

		return $this->isType($type) || abort(401, 'This action is unauthorized.');

	}

	public function isType($type) {

		return $this->getType() == $type;

	}

}