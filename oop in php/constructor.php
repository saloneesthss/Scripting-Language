<?php
class MyClass {
    public function __construct() {
        echo "The class '" . __CLASS__ . "' was initiated!<br>";
    }
    public function __destruct() {
        echo "The class '" . __CLASS__ . "' was destroyed!<br>";
    }
}
$obj=new MyClass;
echo "The end of the file is reached.<br>"
?>

<!-- To explicitly trigger the destructor, use unset($obj);  -->