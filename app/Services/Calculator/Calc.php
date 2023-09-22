<?php
namespace App\Services\Calculator;


class Calc {

   public function sum(int $a, int $b):int{

        return $a + $b;
   }

   public function multiply(int $a, int $b):int{

      return $a * $b;
   }

}