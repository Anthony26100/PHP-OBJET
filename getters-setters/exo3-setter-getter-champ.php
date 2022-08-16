<?php
  if(isset($_POST['submit'])){
    $texte = $_POST['text'];

    class Textes {
      private $nom;

      public function __construct(){
        $this->nom;

      }

      public function setTexte($texte){
        $this->nom = $texte;
      }

      public function getTexte(){
        return $this->nom;
      }
      
    }
      
    $message = new Textes;
    $message->setTexte($texte);
    echo $message->getTexte();

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
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="text" required>
    <input type="submit" name="submit" value="submit" />
  </form>
</body>
</html>