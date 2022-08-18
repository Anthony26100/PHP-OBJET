<?php


abstract class A {

  public function methode(){
    echo "Bonjour";
  }

}

  
class B extends A {
    
}

$objet1 = new A();
$objet1->methode();
$objet = new B();
$objet->methode();
