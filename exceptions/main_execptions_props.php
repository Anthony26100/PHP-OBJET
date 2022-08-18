<?php

$a = 10;
$b = 0;

try { // Essayer
  if($b == 0) {
    throw new Exception('Le dénominateur ne doit etre nul.');
    $c = $a / $b;
    echo $c;
  }
} catch (Exception $e) {
  $erreur = "Document : ". $e->getFile() . "<hr>";
  $erreur.= "Line : ".$e->getLine() . "<hr>";
  $erreur.= "Code d'erreur : ".$e->getCode() . "<hr>";
  $erreur.= "Message : ".$e->getMessage() . "<hr>";
  echo $erreur;
}