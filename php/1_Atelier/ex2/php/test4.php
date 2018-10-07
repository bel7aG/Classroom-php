<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../css/master.css">
</head>

<body>
  <?php
    echo "<h1 class='heading'>My Information</h1>";
    echo "<table>";
    foreach ($_POST as $datas => $data) {
      if ($data == "submit") {
        exit();
      }
      echo "<tr><td>$datas</td><td>$data</td></tr>";
    }


  ?>
</body>

</html>
