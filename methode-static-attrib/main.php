<?php



class Facture {
  
  const TVA = 20;
  private static $_att;

  public function __construct() {
     self::$_att="POO";
  }

  public function __destruct() {

  }
  
  public static function montantTtc($ht){
    return $ht*(1+self::TVA/100);
  }

  public function affichageAttribut(){
    return self::$_att;
  }

  public function modifierAttribut($val){
     self::$_att = $val;
  }

}

$objet = new Facture();
echo  'Objet 1 : '.$objet->affichageAttribut();
echo '<hr>';
$objet2 = new Facture();
echo $objet2->modifierAttribut('POO en PHP');
echo '<hr>';
echo 'Objet 2 : '.$objet2->affichageAttribut();
echo '<hr>';
echo  'Objet 1 : '.$objet->affichageAttribut();
echo '<hr>';
// echo Facture::montantTtc(1000);