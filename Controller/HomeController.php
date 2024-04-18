<?php
require "BaseController.php";

class HomeController extends BaseController
{
    /**
     * It Displays index view file
     *
     * @return void
     */
    public function index(): void
    {
        require "View/index.php";
    }
    /**
     * It Displays home view file
     *
     * @return void
     */
    public function home(): void
    {
        require "View/home.php";
    }
    /**
     * It Displays view file
     *
     * @return void
     */
    public function view(): void
    {
        require "View/index.php";
    }
}
