<?php
include "Classes/ShopProduct.php";

$book = new ShopProduct(1,2,3,4);
$book->name = "Mihail";
$book->lastname = "Bulgakov";

$book->title = "David's book";
$book->producerFirstName = "Hello";
$book->producerMainName = "Moto";
echo ($book->getSummaryLine());

echo ShopProduct::sum();