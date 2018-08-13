<?php
/**
* check that the given number is a prime number or not 
* @param int $number
* @throws Exception
* @return bool
*/
function isPrimeNumber($number)
{
  if(!preg_match('/^[0-9]+$/', $number)) {
     throw new Exception('The given number seems to be incorrect');
  }

  for($x = 1; $x <= $number; $x++) {
    if($number % $x == 0 && $number != $x && $x != 1) {
      return false;
    }
  }

  return true;
}

//use the function
try {
    $number = 12;
   if(false === isPrimeNumber($number)) {
      echo "The number {$number} is not a prime number";
   } else {
      echo "The number {$number} is a prime number";
   }
} catch(Exception $e) {
  echo $e->getMessage();
}
