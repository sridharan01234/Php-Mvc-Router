<?php
require "./Interface/InheritedInterface.php";

class InterfaceInheritance implements InheritedInterface {
    public function displayName() {
        echo "This is from UserInteface";
        echo"<br>";
        echo "Hii Sridharan";
        echo"<br>";
    }
    public function displayCollege() {
        echo "This is from Inherited Interface";
        echo"<br>";
        echo "Bannari Amman Institute of technology";
        echo"<br>";
    }
}

echo "Interface class";

