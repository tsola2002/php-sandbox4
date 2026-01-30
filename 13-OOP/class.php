<?php 

    // this defines our class
    class User {
        // define properties of our class
        public string $name;
        public string $email;
        private int $age = 70;

        public function setName($name){
            $this->name = $name;
        }

        public function login(){
            return "User is Logged In";
        }
        public function logout(){
            return "User is Logged Out";
        }

        public function getAge(){
            return $this->age;
        }

    }

    class Admin extends User {

        public function deleteUser(){
            return "User deleted by {$this->name}";
        }

    }

    $admin = new Admin();
    $admin->setName("Alice");
    echo $admin->deleteUser();



    // creating our first object
    // $user = new User;

    // $user->name = "Michael";
    // $user->email = "michael@yahoo.com";

    // echo $user->name . "<br>";
    // echo $user->email . "<br>";

    // echo $user->login() . "<br>";
    // echo $user->logout();

    // //echo $user->age;
    // echo $user->getAge();

    // $classes = get_declared_classes();
    // foreach($classes as $class){
    //     echo $class . "<br>";
    // }


?>