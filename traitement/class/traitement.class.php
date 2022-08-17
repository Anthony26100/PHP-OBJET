<?php


class Traitement {

  private $chaine;
  private $pos;

  public function __construct() {
    $this->chaine;
    $this->pos;
  }

  public function setString($texte) {
    $this->chaine = $texte;

  }

  public function getString() {
    return $this->chaine;
  }

  public function setLenght($texte) {
    return $this->chaine = strlen($texte);
  }

  public function getLenght() {
    return $this->chaine;
  }

  public function chartA($pos){
    return substr($this->chaine, $pos, 1);
  }

  public function subsString($deb, $fin){
    return substr($this->chaine, $deb, $deb - $fin + 1);
  }

  public function setMaj($maj) {
    $this->maj = strtoupper($maj);
  }

  public function getMaj() {
    return $this->maj;
  }

  public function setMin($min) {
    $this->maj = strtolower($min);
  }

  public function getMin() {
    return $this->maj;
  }

}