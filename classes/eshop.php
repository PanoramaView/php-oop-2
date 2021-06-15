<?php
class Eshop
{
  protected $name;
  protected $email;
  protected $phone = '333 1231234';
  protected $url;
  private $id;

  static private $TotalEshops = 0;

  function __construct($name, $email)
  {
    $this->setName($name);
    $this->setEmail($email);

    $this->generateUserId();

    self::$TotalEshops++;
  }

  public function setName($value)
  {
    $this->name = $value;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setEmail($value)
  {
    // Controllo se email valida,
    // se esiste

    $this->email = $value;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setPhone($value)
  {
    // controllo se è un numero valido

    $this->phone = $value;
  }

  public function getPhone()
  {
    return $this->phone;
  }

  public function setUrl($value)
  {
    // Controllo se url valido,
    // se esiste
    $this->setUrl($value);
  }

  public function getUrl()
  {
    return $this->url;
  }

  private function generateUserId()
  {
    $string = $this->name . $this->email;
    $idLength = 10;

    $userId = "";
    
    //crea userId con i char di $string
    while (strlen($userId) <  $idLength) {
      //creazione numero rand non piu' lunga di strlen($string)
      $randNum = rand(0, strlen($string));

      //prende un carattere casuale da $string
      //substr(string,start,length)
      $char = substr($string, $randNum, 1);
      
      $invalidChars = [".", "@"]; //char filter

      if (!in_array($char, $invalidChars)) {
        $userId .= $char; //adds new char in userId
      }
    }

    $this->id = strtolower($userId);
  }

  public function getUserId()
  {
    return $this->id;
  }

  static function getDate()
  {
    return date("D/M/Y");
  }

  static function getTotalEshops()
  {
    return Eshop::$TotalEshops;
  }
}
