<?php

class DestructorClass
{
    public function __construct()
    {
        echo "Hi Iam from constructor<br>";
    }

    public function __destruct()
    {
        echo "Hi I am Destroyed";
    }
}

$init = new DestructorClass();
unset($init);
