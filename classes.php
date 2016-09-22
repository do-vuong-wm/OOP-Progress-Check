<?php

  abstract class Account{

    private $test = "asdadadad";
    protected $username;
    protected $password;
    protected $userMoney;
    protected $userExp = 0;
    protected $userLvl = 1;
    protected $userQuote;

    static private $lvlLimit = 100;

    public $why = 'why';

    public function seeLvl(){

      if($this->userLvl > self::$lvlLimit)
      echo "true";
      else
      echo "false";

    }

    public function calls(){

      echo $this->test = "SDSD";

    }

    public function __construct(){

    }

    final public function set_name($username){

      $this->username = $username;

    }

    final public function set_pass($password){

      $this->password = $password;

    }

    final public function get_name(){

      return $this->username;

    }

    final public function get_pass(){

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

    }

    public function get_Balance(){

      echo $this->userMoney;

    }

    abstract public function addQuote();


  }

  class classes extends Account{

    public function addQuote(){

      echo " I am ".$this->username." and this is cool <br>";

    }


  }
