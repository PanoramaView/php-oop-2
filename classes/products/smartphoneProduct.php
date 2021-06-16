<?php

require_once(__DIR__ . "/../product.php");

class SmartphoneProduct extends Product {
    protected $model;
    protected $brand;
    protected $band = "4g";

    function __construct($name, $qty, $price, $model, $brand)
    {
        parent::__construct($name, $qty, $price);
        $this->model = $model;
        $this->brand = $brand;
    }

    public function setModel($value)
    {
        $this->model = $value;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setBrand($value)
    {
        $this->brand = $value;
    }

    public function getBrand()
    {
        return $this->brand;
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
