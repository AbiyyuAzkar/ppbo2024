<?php

class Publisher 
{
    public $name;
    public $address;
    public $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function show() {
        echo "Publisher: {$this->name}\n";
        echo "Address: {$this->address}\n";
        echo "Phone: {$this->phone}\n";
    }
}