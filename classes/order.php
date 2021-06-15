<?php
class Order {
  protected $product_id = [];
  private $order_id;
  protected $customer_id;

  function __construct($id, $customer_id, $product_id) {

    $this->product_id = $product_id;
    $this->customer_id = $customer_id;
    $this->genId();
  }

  public function getProduct_idName($index) {
  }

  //get id using timestamp
  private function genId()
  {
    $date = new DateTime();
    $this->id = $date->getTimestamp();
  }
}
