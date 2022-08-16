<!-- 
  Moyen mémotechnique
- Mutateur -> Modifier -> Setter
- Accesseur -> Afficher -> Getter
-->


<?php

class Cours {
  private $cours;
  private $prix;

  public function __construct() {
    $this->cours;
    $this->prix;
  }

  public function __destruct()
  {
    
  }

  public function setCours($modifcours) {
    return $this->cours = $modifcours;
  }

  public function getCours() {
    return $this->cours;
  }
}

$cursur = new Cours();
$cursur->setCours('PHP');
echo $cursur->getCours();
