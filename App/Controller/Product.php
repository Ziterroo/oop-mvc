<?php


namespace App\Controller;


use App\Models\Product as MProduct;

class Product extends BaseController
{
    public function __invoke()
    {
        $data = MProduct::findAll();
        $this->view->product = $data[$_GET['id']];
        $this->view->view('/App/templates/product.php');
    }
}