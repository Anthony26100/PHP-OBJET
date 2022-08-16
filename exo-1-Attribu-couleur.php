<!-- 
Attributs : couleur, vitesse, puissance
Affecter une couleur à l'attribut couleur
Affecter une vitesse à l'attribut vitesse = 0

methodes :

Afficher la couleur
Modifier la couleur
Afficher la couleur
Afficher la puissance
Afficher la compteur
Incrementation de la vitesse
Incrementation de la vitesse
Incrementation de la vitesse
Afficher le compteur -->

<?php

class Voiture {
  
  private $couleur = 'Bleu';
  private $vitesse = 0;
  private $puissance = '50';

  public function couleurAffichage(){
    return $this->couleur;
  }

  public function setCouleur($color){
    return $this->couleur = $color;
  }

  public function puissanceVoiture(){
    return $this->puissance;
  }

  public function accelVoiture(){
    return $this->vitesse++;
  }

  public function compteurVoiture(){
  return $this->vitesse;
  }
}

$methodColor = new Voiture;

echo $methodColor->couleurAffichage();
echo "<hr>";
echo $methodColor->setCouleur("Rouge");
echo "<hr>";
echo $methodColor->puissanceVoiture();
echo "<hr>";
echo $methodColor->compteurVoiture();
echo "<hr>";
$methodColor->accelVoiture();
$methodColor->accelVoiture();
$methodColor->accelVoiture();
echo "<hr>";
echo 'Valeur du compteur : '.$methodColor->compteurVoiture();





