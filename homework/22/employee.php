<?php
require_once __DIR__ . '/user.php';

class Employee extends User
{
    private $salary;

    // Конструктор объекта:
    public function __construct($name, $surname, $birthday, $salary)
    {
        parent::__construct($name, $surname, $birthday); // вызываем конструктор родителя
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$employee = new Employee('Коля', 19, '1990-04-23', 40000);

echo $employee->getName();
echo $employee->getSalary();
echo $employee->getAge();