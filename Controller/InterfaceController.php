<?php
require "BaseController.php";
class InterfaceController extends BaseController{
    public function view() {
        require "./View/InterfaceInheritance.php";
    }
}