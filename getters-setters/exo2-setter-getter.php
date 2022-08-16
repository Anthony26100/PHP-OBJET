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

  public function __construct($nom, $age, $sexe) {
    $this->nom = $nom;
    $this->age = $age;
    $this->sexe = $sexe;
  }

  public function setApprenant($nom, $age, $sexe) {
    $this->nom = $nom;
    $this->age = $age;
    $this->sexe = $sexe;
  }

  public function getApprenant() {
    return $this->nom.'<br>'.$this->age.'<br>'.$this->sexe.'<br>' ;
  }

  public function __toString()
  {
   $txt="";
   $txt.="Bonjour, c'est moi ".$this->nom."<br>"; 
   $txt.="Mon age est de : ". $this->age." ans <br>";
   $txt.=($this->sexe ? "Je suis un Homme" : "Je suis une Femme");
   return $txt;
  }
}

$apprenant = new Users('Julie','45',false);
echo $apprenant;
echo '<hr>';
$apprenant2 = new Users('Bouboule','23',true);
echo $apprenant2;