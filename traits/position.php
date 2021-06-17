<?php

trait Position {
  public $lat;
  public $lng;

  public function getAddress(){
    return $this->lat . ","  . $this->lng;
  }

  public function setPippo() {
   // throw new Exception("Error Processing Request");
  }
}