<?php
class Person {
    public $name;
    public $phone;
    public $email;

    public function sendMail(){
        echo "Sent mail to $this->name - at $this->email";
    }
}

$person = new Person();
$person->name = 'Marita';
$person->email = 'email@email.email';
$person->sendMail();

class Employee extends Person {
    protected $salary;

    public function netoSalary(){
        return $this->salary * 0.8;
    }

    public function setSalary($salary){
        if($salary<360){
        $this->salary = $salary;
    } else {
        $this->salary = 360;
    }
    }

    public function getSalary(){
        return $this->salary;
    }
}

class Manager extends Employee {
    public $bonus;
    use GetDiscount;
public function getSalary(){
    return $this->salary + $this->bonus;
}
}

$worker = new Employee();
$worker->name = 'Anne';
$worker->email = 'anne@email.email';
$worker->setsalary(2000);
$worker->sendMail();
var_dump($worker->netoSalary());

$manager = new Manager();
$manager->bonus = 400;
$manager->setsalary(5000);
var_dump($manager);
var_dump($manager->getSalary());


class Client extends Person{
    public $orders;
}

class GoldClient extends Client{
    use GetDiscount;
}

trait GetDiscount {
    public $discount;  
}