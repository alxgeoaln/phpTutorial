<?php
    class Person {
       private $name;
       private $email;

       public function __construct($name, $email)
       {
           $this -> name = $name;
           $this -> email = $email;
            echo 'Person created<br>';
       }

        public function __destruct()
        {
            echo 'Person destroyed<br>';
        }

        public function setName($name){
           $this -> name = $name;
       }
       public function getName(){
           return $this -> name . '<br>';
       }
       public function setEmail($email){
           $this -> email = $email;
       }
       public function getEmail(){
           return $this -> email . '<br>';
       }
    }

    class Customer extends Person {
        private $balance;

        public function __construct($name, $email, $balance)
        {
            parent::__construct($name, $email);
            $this -> balance = $balance;
        }

        public function setBalance($balance){
            $this -> balance = $balance;
        }
        public function getBalance(){
            return $this -> balance . '<br>';
        }
    }

    $customer1 = new Customer('Georgian', 'test@x.ro', 300);

    echo $customer1->getBalance();