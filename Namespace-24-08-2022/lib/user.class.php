<?php

// declare(encoding="UTF-8");
namespace Cci;

use DateTime;

class User
{
  public function __construct()
  {
    echo "Lib user contruct <br/>";
  }
}

function tester()
{
  echo "Appel de la fonction tester <br/>";
}

// Espaces de nom global (va chercher une fonction avant le vendor)
// 2 façon de les appelers pour les utilisers
$date = new DateTime();
// $date2 = new \DateTime();