<?php
require "BaseController.php";

class DefaultAccessModifierController extends BaseController
{
    /**
     * It Displays DefaultAccessModifier view file
     *
     * @return void
     */
    public function view(): void
    {
        require_once "./View/DefaultAccessModifiers.php";
    }
}
