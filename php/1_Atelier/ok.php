<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <?php
    $portfolio = 'http://www.github.com/bel7aG';
    echo "<a href='$portfolio'>$portfolio</a>";
  ?>

  <hr>

  <?php
    $var = 'World';
    $var2 = 13;
    echo "$var<br>$var2";
  ?>

  <hr>
  <?php
    $name = 'Belhassen';
    $surname = 'Gharsallah';
    echo "$name - $surname";
    echo "<br><br>";
    echo "$name<br>$surname";
    echo "
      <table border='1'>
        <tr>
          <td>Name</td>
          <td>Surname</td>
        </tr>

        <tr>
          <td>$name</td>
          <td>$surname</td>
        </tr>

        <tr>
          <td>Nadine</td>
          <td>Hamada  </td>
        </tr>
      </tabel>
    ";
    $info = "$name $surname nadine hamada";
    echo "<script>alert('".$info."')</script>";
  ?>


  <?php
    echo "<hr><h1>Calcul sur les variables</h1>";
    $TVA = 0.18;
    $PRIX = 150;
    $Nombre = 10;
    $PRIX_HT = $Nombre * $PRIX;
    $PRIXTTC = $PRIX_HT * (1 + $TVA);
    echo "$PRIXTTC";
  ?>
</body>
</html>
