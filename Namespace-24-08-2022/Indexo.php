<?php

use Cci\lib\user\{User,Email};
use function Cci\lib\user\{calculer, tester};
use const Cci\lib\user\{NOM, PRENOM};

// Appel de la fonction tester() qui est à l'exterieur de la class (user.class.php);
// use function Cci\tester;
// use const Cci\NOM;

require_once __DIR__."./lib/user.class.php";
require_once __DIR__."./lib/mail.class.php";

$user =  new User();
$user2 = new Email();
echo "<br/>";
echo NOM;
echo "<br/>";
echo PRENOM;
echo "<br/>";
calculer();
echo "<br/>";
tester();






