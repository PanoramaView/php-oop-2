<?php

require_once(__DIR__ . "./../payment.php");

class BankTransfer extends Payment
{
    protected $transferCode;
    protected $creationDate;
    protected $description;

    function __construct($description)
    {
        $this->setTransferCode();
        $this->setCreationDate();
        $this->description = $description;
    }

    public function setTransferCode()
    {   
        $randNumList = '';
        while(strlen($randNumList) < 11){
            $randNum = rand(0, 9);
            $randNumList .= $randNum;
        }
        
        $this->transferCode = intval($randNumList) ;
    }
    public function getTransferCode()
    {
        return $this->transferCode;
    }
    
    public function setCreationDate()
    {
        $this->creationDate = date("d/m/y h:i:s");
    }
    public function getCreationDate()
    {
        return $this->creationDate;
    }
    public function setDescription($value)
    {
        $this->description = $value;
    }

    public function getDescription()
    {
        return $this->description;
    }
}
