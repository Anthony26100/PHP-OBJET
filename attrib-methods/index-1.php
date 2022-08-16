<?php

class Tester {
  private $valeur = 'test';

  public function affichageValeur() {
    // $this = l'instance ici $chaine
    return $this->valeur;
}

public function modifAffichageValeur($test) {
  $this->valeur = $test;
}

}

$chaine = new Tester();

// echo $chaine->valeur;
echo $chaine->affichageValeur().'<br>';
echo "<hr>";
$chaine->modifAffichageValeur('DWWM');
echo $chaine->affichageValeur();


