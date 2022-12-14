<?php

require_once './Person.php';
require_once './Student.php';

//$p = new Person('Zura',28, null);
//$p->name ='Zura';
//$p->age =28;
//$p->salary =null;


//echo $p->name. '<br>';
//echo $p->age. '<br>';
//echo $p->getSalary(). '<br>';
//$p->setSalary(100);
//echo $p->getSalary(). '<br>';
//echo '<prev>';
//var_dump($p);
//echo '</prev>';
$s = new Student("Zura", '28', 1234);
echo $s->name.'<br>';