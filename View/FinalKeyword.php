<?php 
class FinalKeyword {
    final public const foo = "Hiii";

    final public function printVariable() {
        echo $this->variable;
    }
}

final class FinalClass { 

}

class FinalClassCheck extends FinalClass {

}

class FinalKeywordCheck extends FinalKeyword {

    public const foo = "Booo";
    public final function printVariable() {
        echo "Hiii";
    }


}

