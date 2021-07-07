<?php


namespace App\Controller;

use App\Models\Product as Model;
use Exception\Http404Exception;

class Product extends BaseController
{
    public function __invoke()
    {
        $data = Model::findById($_GET['id']);
        try {
            $this->view->product = $data->findById($_GET['id']);
        } catch (\Exception $e) {
            throw new Http404Exception();
        }
        $this->view->view('/App/templates/product.php');
    }
}