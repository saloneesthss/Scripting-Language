<?php
class Person{
    protected $name;
    protected $age;
    public function __construct($name,$age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function displayInfo() {
        echo "Name: $this->name <br>Age: $this->age <br>";
    }
}
class Student extends Person{
    private $studentId;
    private $course;
    public function __construct($name, $age, $studentId, $course) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
        $this->course = $course;
    }
    public function displayInfo() {
        parent::displayInfo();
        echo "Student ID: $this->studentId <br>Course: $this->course <br>";
    }
}
class Employee extends Person{
    private $employeeId;
    private $designation;
    public function __construct($name, $age, $employeeId, $designation) {
        parent::__construct($name, $age);
        $this->employeeId = $employeeId;
        $this->designation = $designation;
    }
    public function displayInfo() {
        parent::displayInfo();
        echo "Employee ID: $this->employeeId <br>Designation: $this->designation <br>";
    }
}
$student = new Student("Salonee", 21, "101", "Scripting Language");
$employee = new Employee("Simran", 32, "1204", "Full stack developer");
echo "Student details:<br>";
$student->displayInfo();
echo "<br>Employee details:<br>";
$employee->displayInfo();
?>