<?php

namespace App\Data\Entities\User;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="profile_position")
 */
class ProfilePositionEntity
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Data\Entities\User\ProfileEntity", inversedBy="positions")
     * @ORM\JoinColumn(name="profile_id", referencedColumnName="id", onDelete="CASCADE")
     */
    private $profile;

    /**
     * @ORM\ManyToMany(targetEntity="App\Data\Entities\Information\SkillEntity", inversedBy="profilePositions")
     * @ORM\JoinTable(
     *     name="skill_to_profile_position",
     *     joinColumns={@ORM\JoinColumn(name="profile_position_entity_id", referencedColumnName="id", nullable=false)},
     *     inverseJoinColumns={@ORM\JoinColumn(name="skill_id", referencedColumnName="id", nullable=false)}
     * )
     */
    private $skills;
}