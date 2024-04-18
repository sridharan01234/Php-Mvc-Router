<?php
abstract class BaseController
{
    /**
     * Creating view method as abstract for code reusability across the application
     * 
     * @return void
     */
    abstract public function view(): void;
}
