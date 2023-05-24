<?php

class EmployeesRepository implements employeesRepositoryInterface{

    private $db;
    private $peopleRepository;

    public function __construct() {
        $this-> db = new Conect();
        $this->peopleRepository = new peopleRepository();
    }

    public function save(People $People, Employees $employees) {
        $query = "INSERT INTO employees (fk_people, office, wage) 
        VALUES (:people, :office, :wage)";
        
        try {
            $stmt = $this->db->getConect()->prepare($query);
            
            $stmt->bindValue(':people', $this->peopleRepository->getIdByEmail($People->getEmail()));
            var_dump($this->peopleRepository->getIdByEmail($People->getEmail()));
            $stmt->bindValue(':office', $employees->getOffice());
            $stmt->bindValue(':wage', $employees->getWage());
            
            $stmt->execute();
            
            echo "Employess inserido com sucesso!";
        } catch(PDOException $e) {
            echo "Erro ao inserir employees: " . $e->getMessage();
        }
    }


    public function update(Employees $employees){

    }
    public function delete(Employees $employees){

    }

}




?>