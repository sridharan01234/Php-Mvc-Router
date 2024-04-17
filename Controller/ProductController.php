<?php
require "BaseController.php";
class ProductController extends BaseController
{
    public function products(): void
    {
        require "View/products.php";
    }

    public function productsList(): void
    {
        require "View/productsList.php";
    }

    public function view(): void
    {
        require "View/products.php";
    }
}
