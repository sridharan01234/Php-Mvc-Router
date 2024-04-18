<?php
require "BaseController.php";
class AnonymousController extends BaseController
{
    /**
     * It routes to anonymous function
     *
     * @return void
     */
    public function view(): void
    {
        require "./View/AnonymousFunctions.php";
    }
}
