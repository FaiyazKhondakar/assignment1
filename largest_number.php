<?php
$largestNumber;
$num1 = 4;
$num2 = 5;
$num3 = 6;

if ($num1 > $num2 && $num1 > $num3) {
    $largestNumber = $num1;
} elseif ($num2 > $num3) {
    $largestNumber = $num2;
} else {
    $largestNumber = $num3;
}
print('Largest Number is ' . $largestNumber);
