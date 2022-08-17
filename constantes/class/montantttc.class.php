<?php

class MontantTTC {

  private $resultat;
  const TVA = 0.2;

  public function __construct(){
    $this->resultat;
  }

  public function __destruct()
  {
    
  }

  public function setValeur($resultat){
    $this->resultat = $resultat;
  }

  public function getValeur(){
    return $this->resultat;
  }

  public function setTVA($resultat){
    $this->resultat = $resultat;
  }

  public function getTVA(){
    return $this->resultat;
  }

  public function setTTC($resultat){
    $this->resultat = $resultat;
  }

  public function getTTC(){
    return $this->resultat;
  }
}