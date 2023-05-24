<?php

interface PeopleRepositoryInterface{

    public function getById($id);
    public function getByEmail($email);
    public function save(People $People);
    public function update(People $People);
    public function delete(People $People);

}

?>