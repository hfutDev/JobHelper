<?php
class admin{
	private name;
	private password;
	public function getName() {
		return $this->name;
	}
	public function getPassword() {
		return $this->password;
	}

	public function setName($name) {
		$this->name = $name;
	}
	public function setPassword($password) {
		$this->password=$password;
	}
}
?>