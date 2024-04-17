<?php
require "BaseController.php";

class HomeController extends BaseController
{
    public function index(): void
    {
        require "View/index.php";
    }
    public function home(): void
    {
        require "View/home.php";
    }
    public function view (): void {
        require "View/index.php";
    }
}
