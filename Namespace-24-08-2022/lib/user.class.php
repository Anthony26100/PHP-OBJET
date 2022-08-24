<?php

// declare(encoding="UTF-8");
// namespace Cci\utilisateurs;
namespace Cci\lib\user;
const PRENOM = "toto";
// use DateTime;

class User
{
  public function __construct()
  {
    echo "Lib Email contruct <br/>";
  }
}

function calculer()
{
  echo "appel de calculer <br/>";
}

// function tester()
// {
//   echo "Appel de la fonction tester <br/>";
// }

// const NOM="toto";
// // Espaces de nom global (va chercher une fonction avant le vendor)
// // 2 façon de les appelers pour les utilisers
// $date = new DateTime();
// // $date2 = new \DateTime();