<?php
require "BaseController.php";
class ProductController extends BaseController
{
    /**
     * It Displays products view file
     *
     * @return void
     */
    public function products(): void
    {
        require "View/products.php";
    }
    /**
     * It Displays productsList view file
     *
     * @return void
     */
    public function productsList(): void
    {
        require "View/productsList.php";
    }
    /**
     * It Displays view file
     *
     * @return void
     */
    public function view(): void
    {
        require "View/products.php";
    }
}
