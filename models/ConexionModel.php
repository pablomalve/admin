<?php

class ConexionModel{
  static public function cnx(){
    $link = new PDO("mysql:host=localhost;dbname=ecobros","admin", "sector7g");
    $link -> exec("set names utf8");
    return $link;

  }
}