<?php

require_once(APPPATH . 'core/Entity.php');

class Task extends Entity {

	private $name;
	private $priority;
	private $size;
	private $group;

	public function setName($value) {
		// alpha_numeric_spaces|max_length[64]
		if (preg_match('/^[a-zA-Z\s\d]{1,64}$/', $value)) {
			$this->name = $value;
		}

		return;
	}

	public function getName() {
		return $this->name;
	}

	public function setPriority($value) {
		// integer|less_than[4]
		if (preg_match('/^[1-3]{1}$/', $value)) {
			$this->priority = $value;
		}

		return;
	}

	public function getPriority() {
		return $this->priority;
	}

	public function setSize($value) {
		// integer|less_than[4]
		if (preg_match('/^[1-3]{1}$/', $value)) {
			$this->size = $value;
		}

		return;
	}

	public function getSize() {
		return $this->size;
	}

	public function setGroup($value) {
		// integer|less_than[5]
		if (preg_match('/^[1-4]{1}$/', $value)) {
			$this->group = $value;
		}

		return;
	}

	public function getGroup() {
		return $this->group;
	}
}
