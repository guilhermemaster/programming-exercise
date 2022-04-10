<?php
/*
https://projecteuler.net/

The sum of the squares of the first ten natural numbers is,

The square of the sum of the first ten natural numbers is,

Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is .

Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.

->sorted out<-
*/
$contExpo=0;
$contSum=0;
for($i=1;$i<=100;$i++){
    $contExpo=$contExpo+pow($i,2);
}

for($i=1;$i<=100;$i++){
    $contSum=$contSum+$i;
}

$contSum=pow($contSum,2);



print $contSum-$contExpo;

?>