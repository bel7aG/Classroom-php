<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="lol.css">
</head>

<body>
  <table>
  <?php
  echo "<tr ><td colspan='2' class='ex'>".date('l jS \of F Y h:i:s A')."</td></tr>";
    $PRIX = $_POST["Price"];
    $Nombre = $_POST["Number"];
    $TVA = $_POST["TVA"];
    $PRIX_HT = $Nombre * $PRIX;
    $PRIXTTC = ($PRIX_HT * (1 + $TVA)) / 10;
    foreach ($_POST as $datas => $data) {
      if ($data == "Done") {
        break;
      }
      echo "<tr><td>$datas</td><td>$data</td></tr>";
    }
    echo "<tr><td>Prix_HT</td><td>$PRIX_HT</td></tr>";
    echo "<tr><td>PRIXTTC</td><td>$PRIXTTC</td></tr>";

  ?>
</table>
</body>

</html>
