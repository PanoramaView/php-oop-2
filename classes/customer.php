<?php
class Customer {
  private $id;
  protected $name;
  protected $email;
  protected $age;
  protected $primeSub;

  static private $totalCustomers = 0;

  function __construct($name, $email, $age) {
    $this->setName($name);
    $this->setEmail($email);
    $this->setAge($age);

    $this->generateUserId();

    self::$totalCustomers++;
  }

  public function setName($value) {
    $this->name = $value;

    //$this->generateUserId();
  }
  public function getName() {
    return $this->name;
  }

  public function setEmail($value) {
    // Controllo se email valida,
    // se esiste

    $this->email = $value;

    //$this->generateUserId();
  }
  public function getEmail() {
    return $this->email;
  }

  public function setAge($value) {
    // controllo se è un numero valido
    // lo converto in un intero
    $this->age = $value;
  }
  public function getAge() {
    return $this->age;
  }

  public function setDiscount($eta) {
    if ($this->age !== $eta) {
      $this->setAge($eta);
    }

    if ($eta > 65) {
      $this->discount = 40;
    }
  }

  public function getDiscount() {
    return $this->discount;
  }

  private function generateUserId() {
    $string = $this->name . $this->email;
    $idLength = 12;

    $userId = "";

    while (strlen($userId) <  $idLength) {
      $randNum = rand(0, strlen($string));
      $char = substr($string, $randNum, 1);
      $invalidChars = [".", "@"];

      if (!in_array($char, $invalidChars)) {
        $userId .= $char;
      }
    }

    $this->id = strtolower($userId);
  }

  public function getUserId() {
    return $this->id;
  }

  static function getDate() {
    return date("D/M/Y");
  }

  static function getTotalCustomers() {
    return Customer::$totalCustomers;
  }
}