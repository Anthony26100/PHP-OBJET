<?php
// Le problème en PHP concernant l'héritage et qu'une classe fille ne peut heriter que d'une classe mère

// Les traits permettent de résoudre cette problématique

trait Ecole 
{
  public function apprendre() {
    echo "<h1 style='text-align: center;'>J'adore apprendre le PHP</h1><br/>";
  }

}

trait Entreprise
{
  public function Geolocation() {
    echo "Vous êtes situé sur Valence, dans la Drôme<br/>";
  }
}

class Apprenant
{

  use Ecole, Entreprise;

}

$stagiaire = new Apprenant();
$stagiaire->apprendre();
$stagiaire->Geolocation();