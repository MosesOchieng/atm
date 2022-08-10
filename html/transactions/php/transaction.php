<?php


if(isset($_POST['submit'])){
    $amount = $_POST['amount'];
 }
 function factorial_of_a_number($amount)
 {
    $service = 2.3 ;
    $minimum = 5 ;
    $totalPay = $service * $amount;
   if($amount > $minimum)
     {
        return $totalPay;
     }
   else 
     {	
        return "value still low";
     }
     }
     
 print_r(factorial_of_a_number(4)."\n");

?>