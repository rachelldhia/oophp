<?php
class Customer{


    private $firstName;
    private $lastname;

    public function __call($firstName, $lastname){
        echo  $firstName, "\n".implode("lastName" .',', $lastname). "\n";
    }

}
$customer = new Customer;
$customer->firstname('Rachel');
echo"<br>";
$customer->lastName('Dhia');




?>