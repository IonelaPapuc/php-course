<?php
setcookie('name', 'Thecode', time() - 60, '/');
echo '<pre>';
var_dump($_COOKIE);
echo'</prev>';
?>