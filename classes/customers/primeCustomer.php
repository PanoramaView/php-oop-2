<?php

require_once(__DIR__ . "/../customer.php");

class PrimeCustomer extends Customer {
    protected $shippingCost = 0;
    protected $subDate;
    protected $discount;

    function __construct($name, $email, $age, $subDate = NULL)
    {
        parent::__construct($name, $email, $age);
        
        if(!isset($subDate)) {
            $subscription = date('Y-m-d H:i:s');
        }
        $this->subDate = $subscription;

        // $this->setDiscount();
    }

    // public function setDiscount($eta) {
    //     if ($this->age !== $eta) {
    //       parent::setAge($eta);
    //     }
    
    //     if ($eta > 65) {
    //       $this->discount = 60;
    //     } else {
    //       $this->discount = $this->level * 10;
    //     }
    //   }
}