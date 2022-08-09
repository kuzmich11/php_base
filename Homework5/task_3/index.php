<?php

include_once "product.php";
include "cart.php";

$keyboard = new Product("keyboard", 100.0);
$mouse = new Product("mouse", 50.0);
$set = new Product("Set", null, $keyboard, $mouse);
//print_r($set->getPrice());
//print_r($set->getComponents());

$cart = new Cart();
$cart->addProduct($mouse, 2);
$cart->addProduct($set, 1);

var_dump($cart);