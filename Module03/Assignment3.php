<?php
// Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

function isEvenOrOdd(int $num) {
   if($num % 2 == 0){
      return "Even Number";
   }else {
      return "Odd Number";
   }
}
$result = isEvenOrOdd(22);
echo $result;
echo PHP_EOL;

// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series

$sum = 0;
for($i = 1; $i <= 100; $i++){
   $sum += $i;
}
echo $sum;
?>