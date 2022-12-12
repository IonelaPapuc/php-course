<?php
$a = 5;
$b = 4;
$c = 1.2;

//echo $a + $b . '<br>';
//echo $a - $b . '<br>';
//echo $a * $b . '<br>';
//echo $a / $b . '<br>';
//echo $a % $b . '<br>';
//echo ($a - $b) * 10/ $c . '<br>';

//$a +=$b; echo $a.'<br>';
//$a -=$b; echo $a.'<br>';
//$a *=$b; echo $a.'<br>';
//$a /=$b; echo $a.'<br>';
//$a %=$b; echo $a.'<br>';

echo $a++ .'<br>';
echo ++$a .'<br>';

echo $a-- .'<br>';
echo --$a .'<br>';


//Var_dump(is_integer(4));
//is_integer();
//is_numeric();
//$strNumber ='12.34';
//$number = (float)$strNumber;
//var_dump($number);

echo "abs(-15)" . abs(-15) .'<br>';
echo "pow(2, 3)" . pow(2,3) .'<br>';
echo "sqrt(16)" . sqrt(16) .'<br>';
echo "max(2, 3)" . max(2,3 ) .'<br>';
echo "min(2,3)" . min(2,3) .'<br>';
echo "round(2.4)" . round(2.4) .'<br>';
echo "floor(2.6)" . floor(2.6) .'<br>';
echo "ceil(2.4)" . ceil(2.4) .'<br>';

$number = 123456789.12345;
echo number_format($number, 3,',',''). '<br>';


?>

