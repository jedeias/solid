<?php

    class people {
        private $Peoplename;
        private $email;
        private $age;
        private $sex;
        private $password;

    public function __construct($Peoplename, $email, $age, $sex, $password) {
        $this->setUserName($Peoplename);
        $this->setEmail($email);
        $this->setAge($age);
        $this->setSex($sex);
        $this->setPassword($password);
    }

	public function getUserName() {
		return $this->Peoplename;
	}
	
	public function setUserName($Peoplename): self {
		$this->Peoplename = $Peoplename;
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