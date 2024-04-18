<?php
require "BaseController.php";
class DestructorController extends BaseController
{
    /**
     * It Displays Destructor view file
     *
     * @return void
     */
    public function view(): void
    {
        require "./View/DestructorClass.php";
    }
}
