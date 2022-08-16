<?php

// class FonctionConstructor {

//   private $texte;
//   private $couleur;

//   public function __construct() 
//   // On appelle ça une  Hydratations
//   {
//     echo $this->texte="Vive les DWWM".'<br>';
//     echo $this->couleur="Rouge".'<br>';
//   }

// }

// $affichageTexte =  new FonctionConstructor();
// $affichage = new FonctionConstructor();

// class DateConstructor {

//   private $nom;
//   private $cours;

//   public function __construct() 
//   // On appelle ça une  Hydratations
//   {
//     echo $this->dateInscription = 'Cette stagiaire a été inscrite le : '.date('d/m/Y').'<br>';
//     echo $this->cours="Cours ? :".'<br>';
//   }

//   public function affichageNom($nom) {
//     return $this->nom = $nom;
//   }

//   public function affichageCours($cour) {
//     return $this->cours = $cour;
//   }

// }

// $stagiaire = new DateConstructor();
// echo $stagiaire->affichageNom('Sandrine') . '<br>';
// echo $stagiaire->affichageCours('Photoshop'). '<br>';
// echo '<hr>';
// $stagiaire2 = new DateConstructor();
// echo $stagiaire2->affichageNom('Pauline') . '<br>';
// echo $stagiaire2->affichageCours('Adobe XD'). '<br>';

// echo 'Ce stagiaire a été inscrite le : '. $stagiaire->dateInscription;


class DateConstructor {

  private $nom;
  private $cours;

  public function __construct($nom, $cours) 
  // On appelle ça une  Hydratations
  {
    echo $this->dateInscription = 'Cette stagiaire a été inscrite le : '.date('d/m/Y').'<br>';
    $this->nom = $nom;
    $this->cours = $cours;
  }

  public function __destruct()
  {
    // Permet de fermer ce qu'il a était mal fermer
  }

  public function affichageNom() {
    return $this->nom;
  }

  public function affichageCours() {
    return $this->cours;
  }


}

$stagiaire = new DateConstructor('Anthony', 'Illustrator');
echo $stagiaire->affichageNom() . '<br>';
echo $stagiaire->affichageCours(). '<br>';
echo '<hr>';
$stagiaire2 = new DateConstructor('Test', 'tester');
echo $stagiaire2->affichageNom() . '<br>';
echo $stagiaire2->affichageCours(). '<br>';
echo '<hr>';