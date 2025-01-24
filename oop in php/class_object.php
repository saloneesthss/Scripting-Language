<?php
class Rectangle {
    public $length=0;
    public $breadth=0;

    public function getArea() {
        return ($this->length * $this->breadth);
    }
    
    public function getPerimeter() {
        return (2*($this->length + $this->breadth));
    }
}
$obj=new Rectangle;

$obj->length=30;
$obj->breadth=20;

echo "The length is " . $obj->length . "<br>";
echo "The breadth is " . $obj->breadth . "<br>";
echo "The area is " . $obj->getArea() . "<br>";
echo "The perimeter is " . $obj->getPerimeter();
?>