<?php

require_once ("autoload.php");

echo "<pre>";

$employeesMam = new People("jorge","test@test.com", 18, "M",  "12345678");

$testMam = new People("test","test2@test.com", 19, "M",  "12345678");

$peopleReposytory = new PeopleRepository();

//$peopleReposytory->save($employeesMam);

//$peopleReposytory->save($testMam);

$employees = new Employees($employeesMam, "web developer", 4864.62);

$testwork = new Employees($testMam, "tester", 2654.62);

$employeesReposytory = new EmployeesRepository();

//$employeesReposytory->save($testMam, $testwork);

//$employeesReposytory->update($employeesMam, $employees);

//$employeesReposytory->delete($testwork);

// $testwork->setOffice("test department");

// $employeesReposytory->update($testwork);

?>