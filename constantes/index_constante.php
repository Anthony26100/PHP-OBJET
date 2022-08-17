<?php


  class Stagiaire {
    
    private $_nom;
    // constante toujours à l'exterieur du constructeur, Obligatoire de mettre en MAJUSCULE les const
    const ECOLE = 'CCI DROME';


    public function __construct() {
      $this->_nom;
    }

    public function __destruct() {

    }

    public function setNom($nom) {
      $this->_nom = $nom;
    }

    public function getNom() {
      return $this->_nom;
    }

  }

  //  Instancie un objet qui recuperer tout de la Class (methode) Membre(attribut)
$apprenant = new Stagiaire();
$apprenant->setNom('Bouboule');
echo "L'école de ". $apprenant->getNom(). " est à : ". Stagiaire::ECOLE.'<br/>' ;
// appeler une constante '::nom de la constante'
echo $apprenant::ECOLE;

