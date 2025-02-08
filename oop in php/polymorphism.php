<?php
// using abstract class
abstract class Greetings {
    abstract public function greet();
}
class English extends Greetings {
    public function greet() {
        return "Hello!";
    }
}
class French extends Greetings {
    public function greet() {
        return "Bonjour!";
    }
}
function greeting($people) {
    foreach ($people as $person) {
        echo $person->greet();
    }
}
?>