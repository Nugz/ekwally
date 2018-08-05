<?php

namespace App\Data\Entities\Information;

use App\Data\Entities\MainEntity;
use App\Data\Extensions\Fractal;
use App\Data\Transformers\Information\SectionEntityTransformer;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="section")
 */
class SectionEntity extends MainEntity
{

	use Fractal;

	static $transformer = SectionEntityTransformer::class;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true, length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Data\Entities\User\ProfileEntity", mappedBy="sections")
     */
    private $profiles;

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