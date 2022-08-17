<?php


class Mere {

  protected $attribut="Bonjour";

  public  function __construct() {
    $this->attribut;
  }

  public function __destruct()
  {
    
  }

  public function methode1() {
    $str = $this->attribut;
    $str.=" je suis la classe Mere ";
    return $str;
  }
}

class Fille extends Mere{
  public function methode2(){
    $str = $this->attribut;
    $str.=" je suis la classe Fille qui hérite de ma Mere ";
    return $str;
  }
}


$objet = new Mere();
echo $objet->methode1();
echo '<hr>';
$objet2 = new Fille();
echo $objet2->methode2();