<?php
require "BaseController.php";
class StaticController extends BaseController
{
    /**
     * It Displays Static view file
     *
     * @return void
     */
    public function view(): void
    {
        require_once "./View/StaticClass.php";
    }
}
