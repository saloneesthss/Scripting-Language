<?php
class Shape {
    public $length=0;
    public $width=0;
    public function getArea() {
        return ($this->length * $this->width);
    }
}
class Square extends Shape {
    public function isSquare() {
        if($this->length == $this->width) {
            return true;
        } else {
            return false;
        }
    }
}
$obj=new Square;
$obj->length=20;
$obj->width=20;

if($obj->isSquare()) {
    echo "The area of square is " . $obj->getArea();
} else {
    echo "The area of rectangle is " . $obj->getArea();
}
?>