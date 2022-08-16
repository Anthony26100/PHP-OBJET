<?php
  if(isset($_POST['add'])&&($_POST['sous'])&&($_POST['divi'])){
    $val1 = $_POST['valeur1'];
    $val2 = $_POST['valeur2'];

    class Addition {
      
      private $sommes;

      public function __construct()
      {
        $this->sommes;
      }

      public function setAddition($val1, $val2) {
        return $this->sommes = $val1 + $val2;
      }

      public function getAddition() { 
        return $this->sommes;
      }
    }
    $AdditionCalcul = new Addition();
    $AdditionCalcul->setAddition($val1, $val2);
    echo $AdditionCalcul-> getAddition();
  }

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
  <form action="#" method="post">
    <input type="number" name="valeur1" id="">
    <br/>
    <input type="number" name="valeur2" id="">
    <br/><br/>
    <input type="submit" value="+" name="add">
    <input type="submit" value="-" name="sous">
    <input type="submit" value="/" name="divi">
    <input type="submit" value="*" name="multi">
  </form>
</body>
</html>