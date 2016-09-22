<?php
spl_autoload_register(function($class){

  include $class. '.php';

});


?>

<html>
<head>
  <meta charset="utf-8">
  <title>OOP-Progress-Check</title>

</head>
<body>

  <?php

    $Tom = new classes;
    $Will = new vipAccount(1, 1000);
    $Will->set_name('Will');
    $Will->set_pass('');
    $Will->addQuote();
    $Will->startFarm(10);
    $Will->calls();
    $Will->seeLvl();


    foreach($Will as $key => $value){

    print "$key => $value\n";

  }

  ?>

</body>
</html>
