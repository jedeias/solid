<?php

interface UserRepositoryInterface{

    public function getById($id);
    public function getByEmail($email);
    public function save(User $user);
    public function update(User $user);
    public function delete(User $user);

}

?>