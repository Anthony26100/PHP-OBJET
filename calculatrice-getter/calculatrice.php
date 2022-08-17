<?php
include('./calculatrice.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <input type="number" name="valeur1" id="">
    <br/>
    <input type="number" name="valeur2" id="">
    <br/><br/>
    <input type="submit" value="+" name="add">
    <input type="submit" value="-" name="soustraction">
    <input type="submit" value="/" name="division">
    <input type="submit" value="*" name="multiplier">
  </form>
</body>
</html>

<?php
  if((isset($_POST['add'])) || (isset($_POST['soustraction']))|| (isset($_POST['division'])) || (isset($_POST['multiplier']))){
    if(is_numeric($_POST['valeur1']) || is_numeric($_POST['valeur2'])) {
      $calculer = new Calculatrice($_POST['valeur1'],$_POST['valeur2']);
      if(isset($_POST['add'])){
        echo $calculer->additionner();
      }elseif ($_POST['soustraction']){
        echo $calculer->soustraction();
      }elseif($_POST['division']){
        echo $calculer->division();
      }elseif($_POST['multiplier']) {
        echo $calculer->multiplier();
      } 
    } else {
        echo "Veuillez saisir des valeurs numériques";
      }
    }
?>