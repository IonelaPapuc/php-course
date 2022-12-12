<?php
$name = "text";
$heloo ="heloo $name";
$heloo2 ='heloo2 $name';
echo $heloo . '<br>';
echo $heloo2 .'<br>';

echo"heloo" . "world" . 'and PHP' . '<br>';


$string ="     Heloo World         ";

echo"1-" . strlen($string) . '<br>' . PHP_EOL;
echo "2-" . trim($string) . '<br>' . PHP_EOL;
echo "3-" . ltrim($string) . '<br>' . PHP_EOL;
echo"4-" .rtrim($string) . '<br>' .PHP_EOL;
echo "5-" .str_word_count($string). '<br>' .PHP_EOL;
echo "6-" . strrev($string) .'<br>' .PHP_EOL;
echo"7-" . strtoupper($string) .'<br>' . PHP_EOL;
echo "8-" . strtolower($string) . '<br>' .PHP_EOL;
echo "9-" . ucfirst('heloo') . '<br>' .PHP_EOL;
echo "10-" . lcfirst ('Heloo') .'<br>' . PHP_EOL;
echo "11-" . ucwords($string, 'world') .'<br>'. PHP_EOL;
echo "12-". strpos($string, 'world') . '<br>' .PHP_EOL;
echo "13-" . stripos( $string, 'word') . '<br>'. PHP_EOL;
echo"14-" . substr ($string, 8,3) . '<br>'. PHP_EOL;
echo "15-". str_replace( 'world', 'PHP',$string) .'<br>' .PHP_EOL;
echo "16-". str_ireplace( 'world', 'PHP',$string) .'<br>' .PHP_EOL;


//$number1 = 100;
//$number2= 123456;
//echo str_pad($number1, 8,'0',STR_PAD_LEFT) .'<br>';








?>

