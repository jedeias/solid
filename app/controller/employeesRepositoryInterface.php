<?php
interface employeesRepositoryInterface{
    
public function save(People $People, Employees $employees);
public function update(Employees $employees);
public function delete(Employees $employees);

}

?>