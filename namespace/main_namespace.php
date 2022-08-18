<?php
include_once('class/etudiant.class.php');
include_once('class/apprenant.class.php');

use Cci\Dwwm\Etudiant;

$stagiaire = new Etudiant();
$stagiaire1 = new Cci\Stagiaires\Etudiant;
echo $stagiaire->afficheNom('Anthony').'<br>';
echo $stagiaire->afficheDatetime().'<br>';
echo $stagiaire1->afficheNom().'<br>';