<?php
class ParentClass {
    function func1() {
        echo "This is a parent<br>";
    }
}
class ChildClass extends ParentClass {
    function func1() {
        echo "This is a child";
    }
}
$parent = new ParentClass;
$child = new ChildClass;
$parent->func1();
$child->func1();
?>