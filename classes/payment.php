<?php

class Payment {
    protected $type;
    protected $date;
    protected $userType;

    function __construct($type, $date, $userType)
    {
        $this->setType($type);
        $this->setdate($date);
        $this->setUserType($userType);
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setDate($value)
    {
        $this->date = $value;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setUserType($value)
    {
        $this->userType = $value;
    }

    public function getUserType()
    {
        return $this->userType;
    }
}
