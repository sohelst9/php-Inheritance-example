<?php
require_once "Man.php";

//---extend class--
class Rasel extends Man{
    public function message()
    {
        return "Message : This is Rasel Child Class";
    }
}

//create child class oject and call method parent class and child class
$rasel = new Rasel();
echo $rasel->message();
echo "<br>";
echo $rasel->info("Rasel Rana", "Dhaka,Bangladesh");