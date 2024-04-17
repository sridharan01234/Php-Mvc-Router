<?php
require "BaseController.php";
class AnonymousController extends BaseController {

    public function view() {
        require "./View/AnonymousFunctions.php";
    }
}