<?php

trait Logger {
  static public $logger = [];
  static public $errors = [];

  public function log(...$args) {
    self::$logger[] = [
      "date" => date('Y-m-d H:i:s'),
      ...$args
    ];

    //var_dump(self::$logger);
  }

  public function error(...$args) {
    self::$errors[] = [
      "date" => date('Y-m-d H:i:s'),
      ...$args
    ];

    //var_dump(self::$logger);
  }

  public function getLogs(){
    return self::$logger;
  }

  public function getErrors(){
    return self::$errors;
  }
}
