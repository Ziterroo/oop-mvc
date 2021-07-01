<?php

require_once __DIR__ . "/autoload.php";

use App\Models\Product;


$product = new Product();
$product->title = 'Samsung galaxy s21 ultra ';
$product->description = '108mp 500max corning gorilla glass 5 color: black';
$product->price = 3399;
$product->insert();
var_dump($product);