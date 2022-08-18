<?php
  include('class/legumes.class.php');
?>
<!DOCTYPE html>
<html lang="FR-fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Panier Fruits</title>
</head>
<body>
  <?php
  // Instancations de la classe Legumes
  $carottes = new Legumes;
  $poireaux = new Legumes;
  $navets = new Legumes;

  // Initialisation des variables objets Nom
  $carottes->setNom('Carottes');
  $poireaux->setNom('Poireaux');
  $navets->setNom('Navets');

  // Initialisation variables objets Prix
  $carottes->setPrix(1);
  $poireaux->setPrix(2);
  $navets->setPrix(3);

  // Initialisation variables objets Quantite
  $carottes->setQuantite(1);
  $poireaux->setQuantite(1);
  $navets->setQuantite(1);
  ?>
  <section class="bloc1">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <select name="legumes" size="1">
        <option value="<?php echo $carottes->getNom()?>"><?php echo $carottes->getNom().' '. $carottes->getPrix()." €"; ?></option>
        <option value="<?php echo $poireaux->getNom()?>"><?php echo $poireaux->getNom().' '. $poireaux->getPrix()." €"; ?></option>
        <option value="<?php echo $navets->getNom()?>"><?php echo $navets->getNom().' '. $navets->getPrix()." €"; ?></option>
      </select>
    <input type="number" name="quantiter" placeholder="Entrez">
    <input type="submit" value="Panier" name="calculer" class="btn btn-primary">
    </form>
  </section>
</body>
</html>

<?php
if (isset($_POST['calculer'])){
  $qte =  $_POST['quantiter'];

  
}

?>
