<?php

class InnerJoinsEmployees extends InnerJoins implements InnerJoinsGetPoepleInterface{

    private $db;

    public function __construct() {
        $this->db = new Conect();
    }

    public function innerJoin()
    {
        $query = "SELECT * FROM employees
                  INNER JOIN people ON (employees.fk_people = people.pk_people)";
    
        try {
            $stmt = $this->db->getConect()->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $result;
    
        } catch (PDOException $e) {
            echo "Error selecting data: " . $e->getMessage();
        }
    }

    public function innerJoinSelect($pk)
    {
        $query = "SELECT * FROM employees
                  INNER JOIN people ON (employees.fk_people = people.pk_people) WHERE pk_employee = :pk_employee";
    
        try {
            $stmt = $this->db->getConect()->prepare($query);
    
            $stmt->bindValue(':pk_employee', $pk);            
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $result[0];
    
        } catch(PDOException $e) {
            echo "Error selecting data: " . $e->getMessage();
        }
    }

}

?>