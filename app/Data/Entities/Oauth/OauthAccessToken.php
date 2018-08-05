<?php

namespace App\Data\Entities\Oauth;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class OauthAccessTokens
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="oauth_access_tokens")
 */
class OauthAccessToken
{

	/**
	 * @var string
	 * @ORM\Id
	 * @ORM\Column(type="string", length=100)
	 */
	protected $id;

	/**
	 * @ORM\Column(type="integer", length=11, nullable=false)
	 */
	private $client_id;

	/**
	 * @var int
	 * 
	 */
	protected $userId;

	/**
	 * @var int
	 * 
	 */
	protected $clientId;

	/**
	 * @var string
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	protected $name;

	/**
	 * @var string
	 * @ORM\Column(type="text", nullable=true)
	 */
	protected $scopes;

	/**
	 * @var boolean
	 * @ORM\Column(type="smallint", length=1, nullable=false)
	 */
	protected $revoked;

	/**
	 * @ORM\Column(type="datetime_immutable", nullable=true)
	 */
	private $created_at;

	/**
	 * @ORM\Column(type="datetime_immutable", nullable=true)
	 */
	private $updated_at;

	/**
	 * @ORM\Column(type="datetime_immutable", nullable=true)
	 */
	private $expires_at;

	/**
	 * @ORM\ManyToOne(targetEntity="App\Data\Entities\User\UserEntity", inversedBy="accessTokens")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id", onDelete="CASCADE")
	 */
	private $user;

	/**
	 * 
	 */
	protected $createdAt;

	/**
	 * 
	 */
	protected $updatedAt;

	/**
	 * 
	 */
	protected $expiresAt;

	/**
	 * @return string
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param string $id
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * @return int
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * @param int $userId
	 */
	public function setUserId($userId) {
		$this->userId = $userId;
	}

	/**
	 * @return int
	 */
	public function getClientId() {
		return $this->clientId;
	}

	/**
	 * @param int $clientId
	 */
	public function setClientId($clientId) {
		$this->clientId = $clientId;
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
	public function getScopes() {
		return $this->scopes;
	}

	/**
	 * @param string $scopes
	 */
	public function setScopes($scopes) {
		$this->scopes = $scopes;
	}

	/**
	 * @return bool
	 */
	public function isRevoked() {
		return $this->revoked;
	}

	/**
	 * @param bool $revoked
	 */
	public function setRevoked($revoked) {
		$this->revoked = $revoked;
	}

	/**
	 * @return mixed
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * @param mixed $created_at
	 */
	public function setCreatedAt($created_at) {
		$this->created_at = $created_at;
	}

	/**
	 * @return mixed
	 */
	public function getUpdatedAt() {
		return $this->updated_at;
	}

	/**
	 * @param mixed $updated_at
	 */
	public function setUpdatedAt($updated_at) {
		$this->updated_at = $updated_at;
	}

	/**
	 * @return mixed
	 */
	public function getExpiresAt() {
		return $this->expires_at;
	}

	/**
	 * @param mixed $expires_at
	 */
	public function setExpiresAt($expires_at) {
		$this->expires_at = $expires_at;
	}

	/**
	 * @return mixed
	 */
	public function getUser() {
		return $this->user;
	}

	/**
	 * @param mixed $user
	 */
	public function setUser($user) {
		$this->user = $user;
	}


}