<?php

require_once ("autoload.php");

echo "<pre>";

// $pessoa = new People("jose", "test@test.com", 18, "M", "12345678");

// $peopleRepository = new PeopleRepository();

// //$peopleRepository->save($pessoa);

// $pessoa->setUserName("carlos");

// $peopleRepository->update($pessoa);

// $clientsRepository = new ClientsRepository();

// $client = new Clients($pessoa, "host services", 308.23);

//$clientsRepository->save($client);

$preson = new People(null, $_POST["email"], null, null, $_POST["password"]);

$login = new login();

$login->loginCheack($preson);

// $selectClient = new InnerJoinsEmployees();

// $arrayClints = $selectClient->innerJoin();

// var_dump($arrayClints);

?>