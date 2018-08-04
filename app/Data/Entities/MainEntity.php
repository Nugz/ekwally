<?php

namespace App\Data\Entities;

class MainEntity {

	public function save() {

		\EntityManager::persist($this);
		\EntityManager::flush($this);

		return $this;

	}

	public function delete() {

		\EntityManager::remove($this);
		\EntityManager::flush($this);

	}

}