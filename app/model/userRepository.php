<?php

class UserRepository implements UserRepositoryInterface{

    private $db;

    public function __construct() {
        $this-> db = new Conect();
    }

    public function getById($id) {
        $query = $this->db->getConect()->prepare("SELECT * FROM people WHERE pk_people = :id");
        $query->bindParam(":id", $id);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            throw new Exception("Usuário não encontrado");
        }

        return $user;
    }
    public function getByEmail($email){
        
        $query = $this->db->getConect()->prepare("SELECT * FROM people WHERE email = :email");
        $query->bindParam(":email", $email);
        $query->execute();

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if (!$user) {
            throw new Exception("Usuário não encontrado");
        }

        return $user;
    }
    public function save(User $user) {
        $query = "INSERT INTO people (user_name, email, age, sex, password) VALUES (:name, :email, :age, :sex, :password)";
        
        try {
            $stmt = $this->db->getConect()->prepare($query);
            
            $stmt->bindValue(':name', $user->getUserName());
            $stmt->bindValue(':email', $user->getEmail());
            $stmt->bindValue(':age', $user->getAge());
            $stmt->bindValue(':sex', $user->getSex());
            $stmt->bindValue(':password', $user->getPassword());
            
            $stmt->execute();
            
            echo "Usuário inserido com sucesso!";
        } catch(PDOException $e) {
            echo "Erro ao inserir usuário: " . $e->getMessage();
        }
    }
    public function update(User $user){

    }
    public function delete(User $user){

    }


}

?>