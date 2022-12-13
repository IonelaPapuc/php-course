<?php
echo __DIR__ . '<br>';
echo __FILE__ .'<br>';


//mkdir('test');
//rename('test', 'my_folder');
//rmdir('my_folder');


//$files = scandir('./');
//echo'<prev>';
//var_dump($files);
//echo '</prev>';


//echo file_get_contents('lorem.txt');

$content = file_get_contents('lorem.txt');
//file_put_contents('test.txt', 'Heloo');
file_put_contents('test.txt', ' Text Heloo'. PHP_EOL . $content);