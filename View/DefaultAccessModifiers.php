<?php
class DefaultAccessModifiers
{
    public function __construct()
    {
        echo "Hii from default function<br>";
    }

    /**
     * Just prints Hi user
     * 
     * @return void
     */
    public function sayHello(): void
    {
        echo "Hi user<br>";
    }

}

class DefaultAccessModifiersSub extends DefaultAccessModifiers
{
    public function __construct()
    {
        parent::__construct();
    }
}

$init = new DefaultAccessModifiersSub();
$init->sayHello();
