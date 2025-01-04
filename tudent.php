<?php

class Student
{

    private $name;
    private $grades;


    public function __construct($name, $grades)
    {

        $this->name = $name;
        $this->grades = $grades;
    }


    public function averageGrade()
    {

        if (count($this->grades) === 0) {
            return 0;
        }
        return array_sum($this->grades) / count($this->grades);
    }


    public function displayResult()
    {

        $average = $this->averageGrade();
        echo "Student Name: {$this->name}, Average Grade: {$average}\n";
    }
}


$student = new Student("Alice", [85, 90, 78, 92]);
$student->displayResult();

?>