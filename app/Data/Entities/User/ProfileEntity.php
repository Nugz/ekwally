<?php

namespace App\Data\Entities\User;

use App\Data\Extensions\Fractal;
use Doctrine\ORM\Mapping as ORM;
use LaravelDoctrine\Extensions\Timestamps\Timestamps;
use App\Data\Transformers\User\ProfileEntityTransformer;

/**
 * @ORM\Entity
 * @ORM\Table(name="profile")
 */
class ProfileEntity
{
	use Timestamps, Fractal;

	static $transformer = ProfileEntityTransformer::class;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=11, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", length=10, nullable=true)
     */
    private $salaris_min;

    /**
     * @ORM\Column(type="integer", length=10, nullable=true)
     */
    private $salaris_max;

    /**
     * @ORM\OneToOne(targetEntity="App\Data\Entities\User\UserEntity", mappedBy="profile")
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="App\Data\Entities\User\ProfilePositionEntity", mappedBy="profile")
     */
    private $positions;

    /**
     * @ORM\ManyToMany(targetEntity="App\Data\Entities\Information\SectionEntity", inversedBy="profiles")
     * @ORM\JoinTable(
     *     name="section_to_profile",
     *     joinColumns={@ORM\JoinColumn(name="profile_entity_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="section_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $sections;

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return int
	 */
	public function getSalarisMin() {
		return $this->salaris_min;
	}

	/**
	 * @param int $salaris_min
	 */
	public function setSalarisMin($salaris_min) {
		$this->salaris_min = $salaris_min;
	}

	/**
	 * @return int
	 */
	public function getSalarisMax() {
		return $this->salaris_max;
	}

	/**
	 * @param int $salaris_max
	 */
	public function setSalarisMax($salaris_max) {
		$this->salaris_max = $salaris_max;
	}

	/**
	 * @return \App\Data\Entities\User\UserEntity
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @return \App\Data\Entities\Information\SectionEntity[]
	 */
	public function getSections() {
		return $this->sections;
	}

	/**
	 * @param mixed \App\Data\Entities\Information\SectionEntity[] $sections
	 */
	public function setSections($sections) {
		$this->sections = $sections;
	}

	/**
	 * @return \App\Data\Entities\User\ProfilePositionEntity[]
	 */
	public function getPositions() {
		return $this->positions;
	}

	/**
	 * @param mixed \App\Data\Entities\User\ProfilePositionEntity[] $positions
	 */
	public function setPositions($positions) {
		$this->positions = $positions;
	}



}