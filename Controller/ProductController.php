<?php
class ProductController
{
    public function products(): void
    {
        require "View/products.php";
    }

    public function productsList(): void
    {
        require "View/productsList.php";
    }
}
