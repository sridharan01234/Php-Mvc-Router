<?php
require "BaseController.php";

class ClassConstantController extends BaseController
{
    /**
     * It Displays ClassConstant view file
     *
     * @return void
     */
    public function view(): void
    {
        require "./View/ClassConstant.php";
    }
}
