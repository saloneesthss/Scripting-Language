<?php
class Student {
    private $name;
    private $gender;
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
        echo "Name is set to: $name <br>";
    }
    public function getGender() {
        return $this->gender;
    }
    public function setGender($gender) {
        $this->gender = $gender;
        echo "Gender is set to: $gender";
    }
}
$student = new Student();
$student->setName("Seokjin");
$student->setGender("Male");
?>