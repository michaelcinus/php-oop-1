<?php

class user {

    public $name;
    public $surname;
    public $age;
    public $email;
    public $password;

    public function __construct($name, $surname, $age, $email, $password) {

        $this -> name = $name;
        $this -> surname = $surname;
        $this -> age = $age;
        $this -> email = $email;
        $this -> password = $password;

    }

    public function __toString() {

        return "User" . "<br>" 
                . "Name: " . $this -> name . "<br>"
                . "Surname: " . $this -> surname . "<br>"
                . "Age : " . $this -> age . "<br>"
                . "Email : " . $this -> email . "<br>"
                . "Password : " . $this -> password . "<br>";

    }
}

$u1 = new User( 'Pinco', 'Pallino', 20, 'pincopallino@gmail.com', 'pincopallino2020' );
$u2 = new User( 'Mario', 'Rossi', 50, 'mariorossi@hotmail.it', 'rossi1970mario' );


echo $u1;
echo "<br>";
echo $u2;