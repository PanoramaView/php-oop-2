<?php
class Cart
{
  private $customer;
  private $products = [];
  private $payment;
  private $orderDate;

  function __construct($customer)
  {
    $this->setCustomer($customer);
    $this->genOrderDate();
  }

  public function setCustomer($customer)
  {
    $this->customer = $customer;
  }
  public function getCustomer()
  {
    return $this->customer;
  }

  public function addProduct($value)
  {
    $this->products[] = $value;
  }

  //get id using timestamp
  private function genOrderDate()
  {
    $date = new DateTime();
    $this->orderDate = $date->getTimestamp();
  }
  public function getOrderDate()
  {
    return $this->orderDate;
  }
}

