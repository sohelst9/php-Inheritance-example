<?php
//---parent class---
class Man
{
  public $name;
  public $address;
  public $email;
  public $number;
  public $city;
  public function info($name, $address)
  {
    $this->name = $name;
    $this->address = $address;
    // return "Your Name : " . $this->name . "<br> Your Address: " . $this->address;
  }
  public function common($email, $number, $city)
  {
    $this->email = $email;
    $this->number = $number;
    $this->city = $city;
    // return "Your Email Address : ".$this->email."<br> Your Phone Number : ".$this->number."<br> Your City : ".$this->city;
  }
}
//---create object and call this class method--
// $sohel = new Man();
// echo $sohel->info("Sohel Rana", "Dhaka");
