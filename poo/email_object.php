<?php

ini_set('display_errors', 'on');
require_once "Email.php";

$email = new Email("test@test.fr");

var_dump($email);

