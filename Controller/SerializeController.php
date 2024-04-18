<?php
require "BaseController.php";
class SerializeController extends BaseController
{
    /**
     * It Displays Serialize view file
     *
     * @return void
     */
    public function view(): void
    {
        require_once "./View/Serialize.php";
    }
}
