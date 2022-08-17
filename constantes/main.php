<?php
include('class/montantttc.class.php')
?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css">
  <title>Exo Constante</title>
</head>
<body>
  <section class="bloc1">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="number" name="sommes" id="sommes">
      <input type="submit" value="Envoyer" name="submit">
    </form>
  </section>
  <section class="bloc2">
    <h1>Résultat : </h1>
    <?php
      if(isset($_POST['submit'])){
        $prix = $_POST['sommes'];

        $val = new MontantTTC;
        $val->setValeur($prix);
        echo 'HT : '.$val->getValeur();
        echo '<br>';
        $val->setTVA($prix * $val::TVA);
        echo 'TVA : '.$val->getTVA();
        echo '<br>';
        $val->setTTC($prix + $val->getTVA());
        echo 'TTC : '.$val->getTTC();
      }
  ?>
  </section>
</body>
</html>


