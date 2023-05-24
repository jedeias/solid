<?php

    class People {
        private $userName;
        private $email;
        private $age;
        private $sex;
        private $password;

    public function __construct($userName, $email, $age, $sex, $password) {
        $this->setUserName($userName);
        $this->setEmail($email);
        $this->setAge($age);
        $this->setSex($sex);
        $this->setPassword($password);
    }

	public function getUserName() {
		return $this->userName;
	}
	
	public function setUserName($userName): self {
		$this->userName = $userName;
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