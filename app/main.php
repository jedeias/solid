<?php

require_once ("autoload.php");

$People = new People("josé antonio", "joseantonio@gmail.com", "17", "M", "12345678");

$People1 = new People("antonio", "antonio@gmail.com", 18, "M", "12345678");

echo "<pre>";
//var_dump($People);

$repository = new PeopleRepository();

//$repository->save($People1);

//$People01 = $repository->getByEmail("joseantonio@gmail.com");

//var_dump($People);

$employee = new Employees($People, "Dev", 4540); 

$employeeRepository = new EmployeesRepository();

//$employeeRepository->save($People,$employee);

//$People->setUserName("Carlin");

//$repository->update($People);

var_dump($People1);

$repository->delete($People1);



?>