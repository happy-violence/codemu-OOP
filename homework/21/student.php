<?php
require_once __DIR__ . '/user.php';

class Student extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function setAge($age)
    {
        if($age < 25) {
            parent::setAge($age);
        }
    }

    public function setName($name)
    {
        if(strlen($name) < 10) {
            parent::setName($name);
        }
    }
}

$student = new Student;

$student->setAge(24); // укажем корректный возраст
echo $student->getAge(); // выведет 24 - возраст поменялся

$student->setName('vbxdddddb');
echo $student->getName();