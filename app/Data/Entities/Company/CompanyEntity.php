<?php

namespace App\Data\Entities\Company;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="company")
 */
class CompanyEntity extends \App\Data\Entities\MainEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=125, nullable=false)
     */
	protected $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
	protected $website_url;

    /**
     * @ORM\Column(type="integer", unique=true, length=8, nullable=false)
     */
	protected $kvk_nummer;

	/**
	 * @ORM\Column(type="string", length=10, nullable=true)
	 */
	protected $nr_employees;

	/**
	 * @ORM\Column(type="text", nullable=true)
	 */
	protected $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Data\Entities\User\UserEntity", mappedBy="companyEntity")
     */
	protected $userEntity;

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
	public function getWebsiteUrl() {
		return $this->website_url;
	}

	/**
	 * @param string $website_url
	 */
	public function setWebsiteUrl($website_url) {
		$this->website_url = $website_url;
	}

	/**
	 * @return int
	 */
	public function getKvkNummer() {
		return $this->kvk_nummer;
	}

	/**
	 * @param int $kvk_nummer
	 */
	public function setKvkNummer($kvk_nummer) {
		$this->kvk_nummer = $kvk_nummer;
	}

	/**
	 * @return string
	 */
	public function getNrEmployees() {
		return $this->nr_employees;
	}

	/**
	 * @param string $nr_employees
	 */
	public function setNrEmployees($nr_employees) {
		$this->nr_employees = $nr_employees;
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription($description) {
		$this->description = $description;
	}


}