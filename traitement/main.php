<?php
  include('class/traitement.class.php');



?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Traitement PHP</title>
</head>
<body>
  <section class="bloc1">  
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="text" name="texte" required/>
      <input type="submit" value="Traitement" name="traitement" />
    </form>
  </section>
  <section class="bloc2">
    <?php
      if(isset($_POST['traitement'])){
        $txt = new Traitement();
        $txt->setString($_POST['texte']);
        echo $txt->getString();
        echo "<hr>";
        echo $txt->chartA('1');
        echo "<hr>";
        echo $txt->subsString(0, 2);
        echo "<hr>";
        $txt->setLenght($_POST['texte']);
        echo $txt->getLenght();
        echo "<hr>";
        $txt->setMaj($_POST['texte']);	
        echo $txt->getMaj();
        echo "<hr>";
        $txt->setMin($_POST['texte']);
        echo $txt->getMin();
        
      }

    ?>
  </section>

</body>
</html>