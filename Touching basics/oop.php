<?php

class User{
    //Properties are attributes that belong to a class
    public $name;
    public $email;
    public $password;

    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password){
        // echo 'construct additional pylons ';
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    //A method is a function that belongs to a class

    function set_name($name){
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}
//instantiate a user object
$user1 = new User('ligma', 'ligma@balls.com', 'sawcon2023');
$user2 = new User('slugma', 'slugma@nuts.com', 'sawcon2024');

// var_dump($user1);
// var_dump($user2);

// inheritance
class Employee extends User{
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }
    public function get_title(){
        return $this->title;
    }
}
$employee1 = new Employee('karen', 'karen@sawcon.com', '123123', 'manager');
echo $employee1->get_title();