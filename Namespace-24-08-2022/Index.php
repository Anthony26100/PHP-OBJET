<?php

use Cci\User;

// Appel de la fonction tester() qui est à l'exterieur de la class (user.class.php);
use function Cci\tester;

require_once __DIR__."./lib/user.class.php";

$user = new User();

tester();




