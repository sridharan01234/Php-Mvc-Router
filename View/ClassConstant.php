<?php
class ClassConstant {
    const Constant = "Sridharan<br>";

    public function __construct() {
        echo self::Constant;
    }
}

echo ClassConstant::Constant;

$init = new ClassConstant();

$init->Constant = "Sri";
$init->Constant = "Dharan";

$className = "ClassConstant";
echo $className::Constant;