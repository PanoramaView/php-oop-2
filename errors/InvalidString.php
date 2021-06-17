<?php

class InvalidString extends Exception {
  protected $defaultMessage = "Errore dato in invalidString.php";

  function __construct($message = "", $code = 0) {
    if (empty($message)) {
      $message = $this->defaultMessage;
    }

    parent::__construct($message, $code);
  }
}
