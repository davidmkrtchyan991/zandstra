<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 2/26/2017
 * Time: 11:42 AM
 */
class BookProduct extends ShopProduct
{
    private $numPages;

    public function __construct($title, $firstName, $mainName, $price, $numPages) {
        parent::_construct($title, $firstName, $mainName, $price);
        $this->numPages = $numPages;
    }

    public function getNumberOfPages() {
        return $this->numPages;
    }

    public function getSummaryLine() {
        $base = parent::getSummaryLine();
        $base .= ": $this->numPages стр.";
        return $base;
    }


}