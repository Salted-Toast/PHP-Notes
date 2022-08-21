<?php
    /*===================Classes===================*\

    - Classes are thingys

    // Access Modifiers: public, private & protected
    // Public - can be accessed from anywhere 
    // Private - can olny be accessed frmo inside the class
    // Protected - can only be accessed from inside the class and inheriting classes

    ** Class Syntax
    class name{
        // To make a property
        Access Modifier property;
        
        // To make a method
        function funcName(vars) {
            // Code within function
        }

    };

    \*=============================================*/

    class User{
        // Vars below are properties
        // Properties are atributes that bellong to a class
        public $name;
        public $email;
        public $password;

        // A constructor is a method that runs when an object is created
        public function __construct($name, $email, $password) {
            $this->name = $name;
            $this->name = $email;
            $this->name = $password;
        }

        // Methods

        function setName($name) {
            $this->name = $name;
        }
        
        function getName($name) {
            return $this->name;
        }

    };

    // Istatiate a user object
    $user1 = new User('Salted-Toast', 'Salted-Toast@gmail.com', 'st');
    $user2 = new User('Mike Oxlong', 'MikeOxlong@gmail.com', 'mo');

    // Inheritence

    class Employee extends User {
        public function __construct($name, $email, $password, $title)
        {
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }

        public function getTitle() {
            return $this->title;
        }
    }

    $employee1 = new employee('John','johndoe@gmail.com','123456','Manager');
    echo $employee1->getTitle();

?>
