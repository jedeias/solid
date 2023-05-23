<?php 

require_once ($_SERVER['DOCUMENT_ROOT']."/solid/app/config/host.php");

class Conect extends Host{

    protected $conect;

    public function __construct() {
        try {
            $this->conect = new PDO(
        
                "mysql:host={$this->getHost()};
                dbname={$this->getDatabase()}", 
                $this->getName(), 
                $this->getPassword()
            );
            
        } catch (PDOException $e) {
            echo "connection failed: " . $e->getMessage();
        }
    }

	public function getConect() {
		return $this->conect;
	}
}

?>