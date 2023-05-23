<?php 

abstract class Host{

    private $host = "localhost";
    private $database = "solid";
    private $name = "root";
    private $password = "";

	protected function getHost() {
		return $this->host;
	}	
	
	protected function getDatabase() {
		return $this->database;
	}
	
	protected function getName() {
		return $this->name;
    }
	
	protected function getPassword() {
		return $this->password;
	}
}

?>