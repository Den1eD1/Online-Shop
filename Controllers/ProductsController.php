<?php
namespace Project\Controllers;

use Project\Models;
use Project\View;
use Project\ViewModels\Product;

class ProductsController extends Controller
{
    public static function getAllProducts()
    {
        $poductsModel = new Models\Products();

        $result = $poductsModel->getAll();

        $productsViewModel = [];
        foreach ($result as $p) {
            $product = new Product($p['name'], $p['price'], $p['sold']);

            array_push($productsViewModel, $product);
        }

        return new View('allProducts',$productsViewModel);
    }
}