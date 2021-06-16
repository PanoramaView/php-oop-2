<?php
class Product
{
  protected $name;
    protected $qty;
    protected $price;

    function __construct($name, $qty, $price)
    {
        $this->setName($name);
        $this->setQty($qty);
        $this->setPrice($price);
    }

    public function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setQty($value)
    {
        $this->qty = $value;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setPrice($value)
    {
        $this->price = $value;
    }

    public function getPrice()
    {
        return $this->price;
    }

  
}

