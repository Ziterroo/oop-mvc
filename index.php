<?php

require_once __DIR__ . "/autoload.php";

use App\Models\Product;
use App\Models\Service;
use App\View;

$view = new View();

$view->products = Product::findAll();
$view->services = Service::findAll();

$view->view("/app/templates/index.php");
