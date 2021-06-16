<?php

class Utilities {
  static public function toUpperCase($str){
    return strtoupper($str);
  }

  //get id using timestamp
  static public function genId()
  {
    $date = new DateTime();
    return $date->getTimestamp();
  }

  
}
