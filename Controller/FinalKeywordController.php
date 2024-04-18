<?php
require "BaseController.php";

class FinalKeywordController extends BaseController
{
    /**
     * It Displays FinalKeyword view file
     *
     * @return void
     */
    public function view(): void
    {
        require "./View/FinalKeyword.php";
    }
}
