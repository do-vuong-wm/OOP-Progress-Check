<?php

class vipAccount extends Account{

  public function __construct($startLvl, $startMoney){

    $this->userLvl = $startLvl;
    $this->userMoney = $startMoney;

  }

  public function startFarm($repeatNum){

    for ($i=0; $i < $repeatNum; $i++) {
      # code...
      $expGained = mt_rand(9000, 20000);
      $moneyGain = round($expGained / mt_rand(100, 1000), 3);
      $this->userExp += $expGained;
      $this->userMoney += $moneyGain;
      $this->userLvl += round($this->userExp / (100000 * $this->userLvl));
      echo "VIP: ".$this->username." got ". $expGained . " experience and gained €".$moneyGain.' -> Lvl '.$this->userLvl."<br>";

    }

    $this->get_Balance();

  }

  public function addQuote(){

    echo " I am ".$this->username." and this is coolio <br>";

  }


}
