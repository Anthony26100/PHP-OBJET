<!-- Attributs de type private 

nom,class,attaque,pv, forcegeek
string,string,int, int, booleen

1 - l'initialisation doit se faire à partir du constructeur en passage de valeur
2 - Creation d'une fonction calcul degat : pv/100*attaque
3 - Creation d'une fonction afficher degat "Dégat infligés : on fait référence à la methode "
4 - On doit créer 4 objets et afficher les dégats suivant les valeurs initiées à l'instancation -->

<?php

class ExoConstructor {
  
  private $nom;
  private $class;
  private $attaque;
  private $pv;
  private $forcegeek;


  public function __construct($nom, $class, $attaque, $pv, $forcegeek) {
    $this->nom = $nom;
    $this->class = $class; 
    $this->attaque = $attaque;
    $this->pv = $pv;
    $this->forcegeek = $forcegeek;
  }

  public function affichagePerson() {
    return $this->nom . '<br/>' . $this->class . '<br>' . $this->attaque . '<br/>' . $this->pv . '<br>' . $this->forcegeek . '<br>';
  }

  public function calculDegat() {
    return $this->pv = $this->pv /100 * $this->attaque;
  }

  public function afficherDegat () {
      echo "Dégat infligés : ".$this->calculDegat(). '<br>';
  }

  public function __destruct()
  {
    
  }
}

$test = new ExoConstructor('anthony','testo',10,100,true);
$test2 = new ExoConstructor('anthony','tesxto',4,55,false);
$test3 = new ExoConstructor('anthony','tewwwsto',6,15,true);
$test4 = new ExoConstructor('anthony','tewwwaaasto',8,10,false);

echo $test->affichagePerson().'<br>';
$test->afficherDegat();
echo '<hr>';
echo $test2->affichagePerson().'<br>';
$test2->afficherDegat();
echo '<hr>';
echo $test3->affichagePerson().'<br>';
$test3->afficherDegat();
echo '<hr>';
echo $test4->affichagePerson().'<br>';
$test->afficherDegat();
