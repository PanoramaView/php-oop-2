<?php

require_once(__DIR__ . "./../payment.php");

class CreditCard extends Payment
{
    protected $number;
    protected $expires;
    protected $cvv;

    function __construct($number, $expires, $cvv)
    {
        $this->number = $number;
        $this->setExpires($expires);
        $this->cvv = $cvv;

        $this->setExpires($expires);
    }
    public function setExpires($value)
    {
        $expTime = date_create_from_format("m/Y", $value);
        $this->expires = $expTime;
    }
    public function getExpires() {
        return date_format($this->expires, "m/Y");
      }
}
