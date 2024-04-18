<?php

class StaticClass
{
    public static $variable = "Static variable Check<br>";

    /**
     * For checking stating method
     *
     * @return void
     */
    public static function staticCheck(): void
    {
        echo "Static method Check <br>";
    }
}

/**
 * calling static method using instance
 */
$class = new StaticClass();
$class->staticCheck();

try {
    $class->variable = "Changing Static variable";
} catch (Exception $e) {
    echo $e->getMessage();
}

/**
 * Calling stating method without creating instance
 */
StaticClass::staticCheck();

echo StaticClass::$variable;
