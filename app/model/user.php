<?php

    class User {
        private $username;
        private $email;
        private $age;
        private $sex;
        private $password;

    public function __construct($username, $email, $age, $sex, $password) {
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setAge($age);
        $this->setSex($sex);
        $this->setPassword($password);
    }

	public function getUsername() {
		return $this->username;
	}
	
	public function setUsername($username): self {
		$this->username = $username;
		return $this;
	}
	
	
	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}
	
	
	public function getAge() {
		return $this->age;
	}
	
	public function setAge($age): self {
		$this->age = $age;
		return $this;
	}
	
	
	public function getSex() {
		return $this->sex;
	}
	
	public function setSex($sex): self {
		$this->sex = $sex;
		return $this;
	}
	
	
	public function getPassword() {
		return $this->password;
	}
	
	public function setPassword($password): self {
		$this->password = $password;
		return $this;
	}
}

?>