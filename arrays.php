<?php

$fruits = array("Banana", "Apple","Orange");
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';

//echo $fruits[0] .'<br>';

//$fruits[0] ='Peach';
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';

//echo '<pre>';
//var_dump(isset($fruits[2]));
//echo '</pre>';

$fruits[] = "Peach";
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';


echo count($fruits) .'<br>';
array_push($fruits ,'Peach');
echo '<pre>';
var_dump($fruits);
echo '</pre>';

array_pop($fruits);

array_unshift($fruits, 'Apple');
array_shift($fruits);

$string= "Banana, Apple, Peach";
//echo '<pre>';
//var_dump(explode(".", $string));
//echo '</pre>';


echo implode("&", $fruits) . '<br>';
//print_r($fruits);

in_array('Apple' ,$fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


echo array_search ('Apple', $fruits);

$vegetables =['Potato', 'Cucumber'];
echo '<pre>';
//var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]);
echo '</pre>';

//sort($fruits);
//echo '<pre>';
//var_dump($fruits);
//echo '</pre>';

//$numbers = [1,2,3,4,5,6,7,8];
//$evens = array_filter($numbers, fn($n)=> $n %2== 0);
//echo '<pre>';
//var_dump($evens);
//echo '</pre>';

//$squaers = array_map(fn($n) => $n * $n, $numbers);
//echo '<pre>';
//var_dump($squaers);
//echo '</pre>';

//echo array_reduce($numbers, fn($carry, $item) => $carry + $item);

$person =[
    'name'=>'Brad',
    'surname' =>'traversy',
    'age'=> 30,
    'hobbis' => ['Tennis' , 'video']
];
echo $person['name']. '<br>';
echo $person['age'] . '<br>';
$person ['channel'] = 'TraversyMedia';

isset ($person['age']);
isset ($person ['address']);
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

asort($person);
echo '<pre>';
var_dump($person);
echo '</pre>';

$todoItems = [
    ["title" => "item 1", "completed" => true],
    ["title" => "item 2", "completed" => false],
    ["title" => "item 3", "completed" => true],
];
echo '<pre>';
var_dump($todoItems);
echo '</pre>';

?>