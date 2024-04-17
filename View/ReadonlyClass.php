<?php
class ReadonlyClass {
    public readonly string $name;
    public function __construct() {
        $this->name = "My name is not Sridharan<br>";
    }
    public function changeName(string $name): void {
        $this->name = $name;
    }
}

$init = new ReadonlyClass(); 
echo"$init->name";
$init->changeName("Sridharan");
echo"$init->name";