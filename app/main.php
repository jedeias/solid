<?php

require_once ("autoload.php");

$user = new User("josé antonio", "joseantonio@gmail.com", "17", "M", "12345678");

$user1 = new User("antonio", "antonio@gmail.com", 18, "M", "12345678");

echo "<pre>";
//var_dump($user);

$repository = new UserRepository();

//$repository->save($user1);

$user01 = $repository->getByEmail("test@test.com");

var_dump($user01);

?>