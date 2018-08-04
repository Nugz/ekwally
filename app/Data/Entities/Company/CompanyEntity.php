<?php

namespace App\Data\Entities\Company;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="company")
 */
class CompanyEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(nullable=false)
     */
	protected $name;

    /**
     * @ORM\Column(nullable=true)
     */
	protected $website_url;

    /**
     * @ORM\Column(unique=true, nullable=false)
     */
	protected $kvk_nummer;

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
	 * @return string
	 */
	public function getKvkNummer() {
		return $this->kvk_nummer;
	}

	/**
	 * @param string $kvk_nummer
	 */
	public function setKvkNummer($kvk_nummer) {
		$this->kvk_nummer = $kvk_nummer;
	}

}