<?php

require_once ("../autoload.php");

$email = $_GET['id'];

$peopleRepository = new PeopleRepository();

$peopleArray = $peopleRepository->getByEmail($email);

$person = new People($peopleArray['user_name'], $peopleArray['email'], $peopleArray['age'], $peopleArray['sex'], $peopleArray['password']);

$employeesRepository = new EmployeesRepository();

$employees = new Employees($person, null, null);

$employeesRepository->delete($employees);

$peopleRepository->delete($person);

header("location: list.php#Clients");

?>