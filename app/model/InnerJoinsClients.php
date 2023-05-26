<?php

class InnerJoinsClients extends InnerJoins implements InnerJoinsGetPoepleInterface{

    private $db;

    public function __construct() {
        $this->db = new Conect();
    }

    public function innerJoin(){

        $query = "SELECT * FROM clients
        INNER JOIN people ON (clients.fk_people = people.pk_people)";

        try {
            $stmt = $this->db->getConect()->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch(PDOException $e) {
            
            echo "Erro to select: " . $e->getMessage();
        
        }

    }

    public function innerJoinSelect($pk)
    {
        $query = "SELECT * FROM clients
                  INNER JOIN people ON (clients.fk_people = people.pk_people) WHERE pk_client = :pk_client";
    
        try {
            $stmt = $this->db->getConect()->prepare($query);
    
            $stmt->bindValue(':pk_client', $pk);            
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $result[0];
    
        } catch(PDOException $e) {
            echo "Error selecting data: " . $e->getMessage();
        }
    }

}

?>
