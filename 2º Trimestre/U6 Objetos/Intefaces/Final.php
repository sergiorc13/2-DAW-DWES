<?php

class BaseClass {
    public function test() {
        echo "Llamando al método BaseClass::test() <br>";
    }   

    final public function moreTesting() {
        echo "Llamando al método BaseClass::moreTesting() <br>";
    }
}

class ChildClass extends BaseClass {
    public function moreTesting() {
        echo "Llamando al método BaseClass::moreTesting() <br>";
    }
}

?>