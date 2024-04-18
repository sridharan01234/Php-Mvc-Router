<?php
require "./UserInterface.php";
interface InheritedInterface extends UserInterface
{
    public function displayCollege();
}
