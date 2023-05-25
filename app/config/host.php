<?php 

abstract class Host{

    private $host = "localhost";
    private $database = "solid";
    private $name = "root";
    private $password = "";

	protected final function getHost() {
		return $this->host;
	}	
	
	protected final function getDatabase() {
		return $this->database;
	}
	
	protected final function getName() {
		return $this->name;
    }
	
	protected final function getPassword() {
		return $this->password;
	}
}

?>