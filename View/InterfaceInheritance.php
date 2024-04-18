<?php
require "./Interface/InheritedInterface.php";

class InterfaceInheritance implements InheritedInterface
{
    /**
     * Displays name
     * 
     * @return void
     */
    public function displayName(): void
    {
        echo "This is from UserInteface";
        echo "<br>";
        echo "Hii Sridharan";
        echo "<br>";
    }
        /**
     * Displays college name
     * 
     * @return void
     */
    public function displayCollege(): void
    {
        echo "This is from Inherited Interface";
        echo "<br>";
        echo "Bannari Amman Institute of technology";
        echo "<br>";
    }
}

echo "Interface class";
