<?php


class Mere {

  protected $attribut="Bonjour";

  public function methode1() {
    $str = $this->attribut;
    $str.=" je suis la classe Mere.";
    return $str;
  }
}

class Fille extends Mere{

  public function methode1(){

    $str = Mere::methode1().'<br/>';
    $str.= $this->attribut;
    $str.=" je suis la classe Fille.";
    return $str;
  }
}


$objet = new Fille();
echo $objet->methode1();
echo '<hr>';
// echo $objet->methode2();