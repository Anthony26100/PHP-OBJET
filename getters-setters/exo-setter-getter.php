<!-- 
Création de 3 attributs privates
nom
age
sexe

Création d'un constructeur avec passage de paramètres par valeur
Création d'un destructeur
Méthode get pour les 3 attributs avec passage de paramètres par valeur
Méthode set pour les 3 attributs

Création et affichage de deux objets avec instanciation
-->


<?php

class Users {

  private $nom;
  private $age;
  private $sexe;

  public function __construct() {
    $this->nom;
    $this->age;
    $this->sexe;
  }

  public function setNom($nom) {
    return $this->nom = $nom;
  }

  public function getNom() {
    return $this->nom;
  }

  public function setAge($age) {
    return $this->age = $age;
  }

  public function getAge() {
    return $this->age;
  }

  public function setSexe($sexe) {
    return $this->sexe = $sexe;
  }

  public function getSexe() {
    return $this->sexe;
  }

}


$utilisateur = new Users();
$utilisateur->setNom('Anthony');
$utilisateur->setAge(60);
$utilisateur->setSexe('Homme');
echo $utilisateur->getNom().'<br>'. $utilisateur->getAge(). 'ans' .'<br>'. $utilisateur->getSexe();

echo '<hr>';

$utilisateur2 = new Users();
$utilisateur2->setNom('Romain');
$utilisateur2->setAge(20);
$utilisateur2->setSexe('Homme');
echo $utilisateur2->getNom().'<br>'. $utilisateur2->getAge(). 'ans' .'<br>'. $utilisateur2->getSexe();