<?php

class EmployeesRepository implements employeesRepositoryInterface{

    private $db;
    private $peopleRepository;

    public function __construct() {
        $this-> db = new Conect();
        $this->peopleRepository = new peopleRepository();
    }

    public function save(Employees $employees) {
        $query = "INSERT INTO employees (fk_people, office, wage) 
        VALUES (:people, :office, :wage)";
        try {
            $stmt = $this->db->getConect()->prepare($query);
            
            $stmt->bindValue(':people', $this->peopleRepository->getIdByEmail($employees->getPeople()->getEmail()));
            $stmt->bindValue(':office', $employees->getOffice());
            $stmt->bindValue(':wage', $employees->getWage());
            
            $stmt->execute();

        } catch(PDOException $e) {
            echo "Erro ao inserir employees: " . $e->getMessage();
        }
    }

    public function update(Employees $employees){
        $query = "UPDATE employees SET fk_people = :people, office = :office, wage = :wage";
        
        try {
            $stmt = $this->db->getConect()->prepare($query);
            
            $stmt->bindValue(':people', $this->peopleRepository->getIdByEmail($employees->getPeople()->getEmail()));
            $stmt->bindValue(':office', $employees->getOffice());
            $stmt->bindValue(':wage', $employees->getWage());
            
            $stmt->execute();
            

        } catch(PDOException $e) {
            echo "Erro ao inserir employees: " . $e->getMessage();
        }
    }
    public function delete(Employees $employees){
        $query = "DELETE FROM employees WHERE fk_people = :people";

        try{

            $stmt = $this->db->getConect()->prepare($query);
            $stmt->bindValue(':people', $this->peopleRepository->getIdByEmail($employees->getPeople()->getEmail()));

            $stmt->execute();

        }catch(PDOException $e){
            echo "Erro ao deletar employee: " . $e->getMessage();
        }
    }

}




?>