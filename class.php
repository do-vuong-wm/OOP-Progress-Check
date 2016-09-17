<?php

  class gameAccount{

    protected $username;
    protected $password;
    protected $userMoney;
    protected $userExp;
    protected $userLvl;
    protected $userQuote;

    public function __construct(){

    }

    public function set_Acc($username, $password){

      $this->username = $username;
      $this->password = $password;


    }

    public function get_Acc(){

      return $this->username;
      return $this->password;

    }

    function startFarm(){

      for ($i=0; $i < 1; $i++) {
        # code...
        $expGained = mt_rand(9000, 20000);
        $moneyGain = round($expGained / mt_rand(100, 1000), 3);
        $this->userExp += $expGained;
        $this->userMoney += $moneyGain;
        $this->userLvl = round($this->userExp / 10000);
        echo $this->username." got ". $expGained . " experience and gained €".$moneyGain.' -> Lvl '.$this->userLvl."<br>";
      }

      get_Balance();

    }

    private function get_Balance(){

      return $this->userMoney;

    }

    function addQuote($quote){

      $this->userQuote = $quote;
      echo " I am ".$username." and ".$this->userQuote;

    }


  }

  class vipAccount extends gameAccount{

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
        $this->userLvl += round($this->userExp / 10000);
        echo "VIP: ".$this->username." got ". $expGained . " experience and gained €".$moneyGain.' -> Lvl '.$this->userLvl."<br>";
      }

    }


  }
