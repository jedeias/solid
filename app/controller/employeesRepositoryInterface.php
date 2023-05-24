<?php
interface employeesRepositoryInterface{
    
public function save(Employees $employees);
public function update(Employees $employees);
public function delete(Employees $employees);

}

?>