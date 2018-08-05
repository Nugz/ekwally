<?php

namespace App\Data\Entities\Information;

use App\Data\Entities\MainEntity;
use App\Data\Extensions\Fractal;
use Doctrine\ORM\Mapping as ORM;
use App\Data\Transformers\Information\PositionEntityTransformer;

/**
 * @ORM\Entity
 * @ORM\Table(name="position")
 */
class PositionEntity extends MainEntity
{

	use Fractal;

	static $transformer = PositionEntityTransformer::class;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=255, nullable=true)
     */
    private $name;

	/**
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return int
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