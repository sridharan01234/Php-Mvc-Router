<?php

class DefaultAccessModifiers {
     function __construct() {
        echo"Hii from default function<br>";
    }

    function sayHello() {
        echo "Hi user<br>";
    }

}

class DefaultAccessModifiersSub extends DefaultAccessModifiers {
    function __construct() {
        parent::__construct();
    }
}

$init = new DefaultAccessModifiersSub();
$init->sayHello();
