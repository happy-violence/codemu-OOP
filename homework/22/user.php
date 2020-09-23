<?php
class User
{
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getAge()
    {
        return $this->age;
    }

    private function calculateAge()
    {
        $arrayBirthday = explode('-', $this->birthday);
        $currentDate = explode('-', date('Y-m-d'));

        //если разница между текущим годом и годом рождения <= 0
        if($currentDate[0] - $arrayBirthday[0] <= 0) {
            return 'ошибка ввода даты рождения: пользователь из будущего или младше одного года!';
        } elseif ($currentDate[1] - $arrayBirthday[1] > 0) { //если разница между текущим месяцем и месяцем рождения > 0
            $age = $currentDate[0] - $arrayBirthday[0];
        } elseif ($currentDate[1] - $arrayBirthday[1] < 0) { //если разница между текущим месяцем и месяцем рождения < 0
            $age = $currentDate[0] - $arrayBirthday[0] - 1;
        } elseif ($currentDate[2] - $arrayBirthday[2] >= 0) { // если разница между текущим днем месяца и днем рождения >= 0
            $age = $currentDate[0] - $arrayBirthday[0];
        } else {
            $age = $currentDate[0] - $arrayBirthday[0] - 1;
        }

        return $age;
    }
}

//$user1 = new User('Ivan', 'Makarov', '2000-09-20');