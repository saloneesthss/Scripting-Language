<?php
class Hello {
    public static $greeting = "Hello PHP users!";
    public static function sayHello() {
        echo self::$greeting;
    }
}
echo Hello::$greeting;
Hello::sayHello();

$hello=new Hello;
// echo $hello->greeting; => Gives warning
$hello->sayHello();
?>