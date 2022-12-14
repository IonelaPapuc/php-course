<?php
//echo '<prev>';
//var_dump($_POST);
//echo '</prev>';

$connection = require_once './Connection.php';
$connection->addNote($_POST);
header('Location: index.php');


?>