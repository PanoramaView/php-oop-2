<?php

require_once(__DIR__ . "./order.php");

class Product extends Order
{
  protected $name;
  protected $quantity;
  protected $id;

  function __construct($product_id, $customer_id, $order_id, $name, $quantity, $id)
  {
    parent::__construct($product_id, $customer_id, $order_id);

    /* $this->setName($name);
    $this->setEmail($email); */
    $this->quantity = (0);
    $this->setname($name);
    $this->genId();
  }

  public function setname($value)
  {
    $this->name = $value;
  }

  public function setQuantity($value)
  {
    $this->quantity = $value;
  }

  public function getname()
  {
    return $this->name;
  }
  public function getQuantity()
  {
    return $this->quantity;
  }

  //get id using timestamp
  private function genId()
  {
    $date = new DateTime();
    $this->id = $date->getTimestamp();
  }
}
