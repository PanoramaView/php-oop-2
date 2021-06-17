<?php

//require_once(__DIR__ . "/../traits/logger.php");

class InvalidEmail extends Exception {
  //use Logger;

  private $defaultMessage = "Errore dato in invalidEmail.php";

  function __construct($message = "") {
    if(empty($message)){
      $message = $this->defaultMessage;
    }

    //$this->error($message);

    parent::__construct($message);
  }
}
