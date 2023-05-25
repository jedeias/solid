<?php

class PeopleRepository implements PeopleRepositoryInterface{

    private $db;

    public function __construct() {
        $this-> db = new Conect();
    }

    public function getById($id) {
        $query = $this->db->getConect()->prepare("SELECT * FROM people WHERE pk_people = :id");
        $query->bindParam(":id", $id);
        $query->execute();

        $People = $query->fetch(PDO::FETCH_ASSOC);

        if (!$People) {
            throw new Exception("Usuário não encontrado");
        }

        return $People;
    }
    public function getByEmail($email){
        
        $query = $this->db->getConect()->prepare("SELECT * FROM people WHERE email = :email");
        $query->bindParam(":email", $email);
        $query->execute();

        $People = $query->fetch(PDO::FETCH_ASSOC);

        if (!$People) {
            throw new Exception("Usuário não encontrado");
        }

        return $People;
    }
    public function save(People $People) {
        $query = "INSERT INTO people (user_name, email, age, sex, password) VALUES (:name, :email, :age, :sex, :password)";
        
        try {
            $stmt = $this->db->getConect()->prepare($query);
            
            $stmt->bindValue(':name', $People->getUserName());
            $stmt->bindValue(':email', $People->getEmail());
            $stmt->bindValue(':age', $People->getAge());
            $stmt->bindValue(':sex', $People->getSex());
            $stmt->bindValue(':password', $People->getPassword());
            
            $stmt->execute();
            

        } catch(PDOException $e) {
            echo "Erro ao inserir usuário: " . $e->getMessage();
        }
    }
    public function update(People $People){

        $query = "UPDATE people SET user_name = :username, email = :email, age = :age, sex = :sex, password = :password WHERE pk_people = :pk_people";

        try{    
            $stmt = $this->db->getConect()->prepare($query);

            $stmt->bindValue(':username', $People->getUserName());
            $stmt->bindValue(':email', $People->getEmail());
            $stmt->bindValue(':age', $People->getAge());
            $stmt->bindValue(':sex', $People->getSex());
            $stmt->bindValue(':password', $People->getPassword());
            $stmt->bindValue(':pk_people', $this->getIdByEmail($People->getEmail()));
    
            $stmt->execute();

        }catch(PDOException $e) {
            echo "Erro ao atualizar o cliente : " . $e->getMessage();
        }

    }
    public function delete(People $People) {
        $query = "DELETE FROM people WHERE pk_people = :pk_people";
    
        try {
            $stmt = $this->db->getConect()->prepare($query);
            $stmt->bindValue(':pk_people', $this->getIdByEmail($People->getEmail()));

            $stmt->execute();
            echo "Pessoa deletada com sucesso!";
        } catch(PDOException $e) {
            echo "Erro ao deletar a pessoa: " . $e->getMessage();
        }
    }

    public function getIdByEmail($email){
        
        $query = $this->db->getConect()->prepare("SELECT * FROM people WHERE email = :email");
        $query->bindParam(":email", $email);
        $query->execute();

        $People = $query->fetch(PDO::FETCH_ASSOC);

        if (!$People) {
            throw new Exception("Usuário não encontrado");
        }

        return(int) $People["pk_people"];
    }

    public function getAllPeople(){
        
        $query = $this->db->getConect()->prepare("SELECT * FROM people");
        $query->execute();

        $People = $query->fetchAll(PDO::FETCH_ASSOC);

        if (!$People) {
            throw new Exception("Usuário não encontrado");
        }

        return $People;
    }
}

?>