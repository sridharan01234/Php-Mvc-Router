<?php

class HomeController
{
    public function index(): void
    {
        require "View/index.php";
    }
    public function home(): void
    {
        require "View/home.php";
    }
}
