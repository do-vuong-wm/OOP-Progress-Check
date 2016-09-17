<?php
include('class.php');


?>

<html>
<head>
  <meta charset="utf-8">
  <title>OOP-Progress-Check</title>

</head>
<body>

  <?php

    $Will = new vipAccount(10, 1000);
    $Will->set_Acc('SomeRandomGuy', 'secret');
    $Will->startFarm(10);

  ?>

</body>
</html>
