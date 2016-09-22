<?php

class Admin extends Account{

  private function dang(){

    echo "<h1>I am the admin</h1";

  }

  public function addQuote(){

    echo " I am ".$this->username." and this is the admin <br>";

  }

}

 ?>


class intro{

  public static $name;

  public function sayHello($name){

    echo 'Hello All, I am '.$name ;

  }


}
