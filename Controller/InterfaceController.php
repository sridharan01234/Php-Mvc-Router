<?php
require "BaseController.php";
class InterfaceController extends BaseController
{
    /**
     * It Displays Interface view file
     *
     * @return void
     */
    public function view(): void
    {
        require "./View/InterfaceInheritance.php";
    }
}
