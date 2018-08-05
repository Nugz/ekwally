<?php

namespace App\Data\Entities\Information;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="skill")
 */
class SkillEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Data\Entities\User\ProfileEntity", mappedBy="skills")
     */
    private $profiles;
}