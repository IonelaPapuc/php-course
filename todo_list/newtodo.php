<?php
 echo '<pre>';
 var_dump($_POST);
 echo '</prev>';

 $todoName= $_POST['todo_name'] ?? false;
 $todoName =trim ($todoName);
 if($todoName){
     if(file_exists('todo.json')) {
         $json = file_get_contents('todo.json');
         $jsonArray = json_decode($json, true);
         //$jsonArray[$todoName]=['competed' => false];
     }else{
         $jsonArray=[];}

     }
 $jsonArray[$toodoName] =['completed'=> false];
    // echo '<prev>';
    // var_dump($jsonArray);
   //  echo '</prev>';
//file_put_contents('todo.json');
     file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
 }

 header('location: index.php');