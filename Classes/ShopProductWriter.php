<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 2/26/2017
 * Time: 12:09 PM
 */
abstract class ShopProductWriter
{
    private $products = array();

    public function addProduct ( ShopProduct $shopProduct ) {
        $this->products[] = $shopProduct;
    }

    abstract public function write();

    public function read() {
        $str = "";
        foreach ($this->products as $shopProduct) {
            $str .= "{$shopProduct->title}: ";
            $str .= $shopProduct->getProducer();
            $str .= "({$shopProduct->getPrice()})\n";
        }
        print $str;
    }


}