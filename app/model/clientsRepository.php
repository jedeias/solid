<?php

class ClientsRepository implements clientsRepositoryInterface{

    private $db;
    private $peopleRepository;

    public function __construct() {
        $this-> db = new Conect();
        $this->peopleRepository = new peopleRepository();
    }

    public function save(Clients $clients) {
        $query = "INSERT INTO clients (fk_people, services, value_cost) 
        VALUES (:people, :services, :value_cost)";
        try {
            $stmt = $this->db->getConect()->prepare($query);
            
            $stmt->bindValue(':people', $this->peopleRepository->getIdByEmail($clients->getPeople()->getEmail()));
            $stmt->bindValue(':services', $clients->getServices());
            $stmt->bindValue(':value_cost', $clients->getValueCost());
            
            $stmt->execute();

        } catch(PDOException $e) {
            echo "Erro ao inserir employees: " . $e->getMessage();
        }
    }

    public function update(Clients $clients){
        $query = "UPDATE clients SET fk_people = :people, services = :services, value_cost = :value_cost";
        
        try {
            $stmt = $this->db->getConect()->prepare($query);
            
            $stmt->bindValue(':people', $this->peopleRepository->getIdByEmail($clients->getPeople()->getEmail()));
            $stmt->bindValue(':services', $clients->getServices());
            $stmt->bindValue(':value_cost', $clients->getValueCost());
            
            $stmt->execute();
            

        } catch(PDOException $e) {
            echo "Erro ao inserir employees: " . $e->getMessage();
        }
    }
    public function delete(Clients $clients){
        $query = "DELETE FROM clients WHERE fk_people = :people";

        try{

            $stmt = $this->db->getConect()->prepare($query);
            $stmt->bindValue(':people', $this->peopleRepository->getIdByEmail($clients->getPeople()->getEmail()));

            $stmt->execute();

        }catch(PDOException $e){
            echo "Erro ao deletar employee: " . $e->getMessage();
        }
    }

}




?>