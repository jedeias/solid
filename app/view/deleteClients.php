<?php

require_once ("../autoload.php");

$email = $_GET['id'];

$peopleRepository = new PeopleRepository();

$peopleArray = $peopleRepository->getByEmail($email);

$person = new People($peopleArray['user_name'], $peopleArray['email'], $peopleArray['age'], $peopleArray['sex'], $peopleArray['password']);

$clientsRepository = new ClientsRepository();

$clients = new Clients($person, null, null);

$clientsRepository->delete($clients);

$peopleRepository->delete($person);

header("location: list.php#Clients");

?>