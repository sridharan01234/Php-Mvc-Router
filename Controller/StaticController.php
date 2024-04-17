<?php
require "BaseController.php";
class StaticController extends BaseController {
    public function view() {
        require_once "./View/StaticClass.php";
    }
}