<?php

namespace App\Data\Entities\Information;

use App\Data\Entities\MainEntity;
use App\Data\Extensions\Fractal;
use Doctrine\ORM\Mapping as ORM;
use App\Data\Transformers\Information\SkillEntityTransformer;

/**
 * @ORM\Entity
 * @ORM\Table(name="skill")
 */
class SkillEntity extends MainEntity
{

	use Fractal;

	static $transformer = SkillEntityTransformer::class;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Data\Entities\User\ProfilePositionEntity", mappedBy="skills")
     */
    private $profilePositions;

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


}