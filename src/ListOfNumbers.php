<?php

namespace App;

class ListOfNumbers
{
   public $number;

  
   public function executeConditionals(int $number)
   {
      if ($number % 3 === 0 && $number % 5 !== 0) {
         return "Cyber";
      }
      if ($number % 5 === 0 && $number % 3 !== 0) {
         return "Click";
      }
      if ($number % 3 === 0 && $number % 5 === 0) {
         return "cyberclick";
      }
      return $number;
   }

   public function makeList(){
      $max_number = 100;
      for ($i = 1; $i <= $max_number; $i++){
         print_r($this->executeConditionals($i)."<br>");
      }
   }

}

$numbers= new ListOfNumbers();
$numbers->makeList();


?>