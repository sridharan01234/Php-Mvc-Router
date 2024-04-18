<?php
require "BaseController.php";
class ReadonlyController extends BaseController
{
    /**
     * It Displays Readonly view file
     *
     * @return void
     */
    public function view(): void
    {
        require_once "./View/ReadonlyClass.php";
    }
}
