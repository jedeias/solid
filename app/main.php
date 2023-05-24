<?php

require_once ("autoload.php");

echo "<pre>";

$preson = new People(null, $_POST["email"], null, null, $_POST["password"]);

$login = new login();

$login->loginCheack($preson);

?>