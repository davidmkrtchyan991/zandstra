<?php
include "Chargeable.php";
class ShopProduct implements Chargeable
{
    public $title;
    public $producerMainName;
    public $producerFirstName;
    protected $price;
    private $discount = 0;

    public function _construct($title, $firstName, $mainName, $price) {
        $this->title = $title;
        $this->producerMainName = $mainName;
        $this->producerFirstName = $firstName;
        $this->price = $price;
    }

    public function getProducer() {
        return "{$this->producerFirstName} " . "{$this->producerMainName}";
    }

    public function getSummaryLine() {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }

    public function setDiscount ($num) {
        $this->discount = $num;
    }

    public function getPrice() {
        return ($this->price - $this->discount);
    }

    public function sum(){
        return "Hello";
    }


}