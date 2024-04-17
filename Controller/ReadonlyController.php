<?php
require "BaseController.php";
class ReadonlyController extends BaseController {
    public function view() {
        require_once "./View/ReadonlyClass.php";
    }
}