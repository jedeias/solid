<?php

require_once ("../autoload.php");

$session = new Session();

$session->destroy();

die(header("location: url=../../../../"));

?>