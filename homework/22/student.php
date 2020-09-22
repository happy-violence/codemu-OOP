<?php
require_once __DIR__ . '/user.php';

class Student extends User
{
    private $course;

    // Конструктор объекта:
    public function __construct($name, $age, $course)
    {
        parent::__construct($name, $age); // вызываем конструктор родителя
        $this->course = $course;
    }

    public function getCourse()
    {
        return $this->course;
    }
}

$student = new Student('Коля', 19, 3); // сработает конструктор родителя

echo $student->getName(); // выведет 'Коля'
echo $student->getAge(); // выведет 19
echo $student->getCourse();