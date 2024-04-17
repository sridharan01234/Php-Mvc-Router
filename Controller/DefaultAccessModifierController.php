<?php
require "BaseController.php";

class DefaultAccessModifierController extends BaseController {
    public function view() {
        require_once "./View/DefaultAccessModifiers.php";
    }
}