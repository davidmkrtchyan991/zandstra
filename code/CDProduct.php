<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 2/26/2017
 * Time: 11:30 AM
 */
class CDProduct extends ShopProduct
{
    private $playLength;

    public function __construct($title, $firstName, $mainName, $price, $playLength) {
        parent::_construct($title, $firstName, $mainName, $price);
        $this->playLength = $playLength;
    }

    public function getPlayLength() {
        return $this->playLength;
    }

    public function getSummaryLine(){
        $base = parent::getSummaryLine();
        $base .=  ": Время звучания - {$this->playLength}";
        return $base;
    }
}