<?php


namespace App\Controller;

require_once __DIR__ . "/../../autoload.php";


use App\Models\Product;

class Index extends BaseController
{
    public function __invoke()
    {
        $data = Product::findAll();
        $this->view->products = $data;
        $this->view->view('/App/templates/index.php');
    }

}