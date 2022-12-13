<?php


$age = 65;
$salary =6000000;
// if( $age > 25)
 //{
  //   echo"you are not young" .'<br>';
 //}

//if( $age < 25)
//{
//    echo"you are not young" .'<br>';
//} else{
 //   echo "you are young" . '<br>';
//}
 //if ($age <22 && $salary > 500000){
  //   echo ' you are young and very rich' . '<br>';

// }
//if ($age <22 || $salary > 500000){
//    echo ' you are young or very rich' . '<br>';

//}


//if ($age < 28) {
  //  echo 'Young' . '<br>';
//}
//elseif ($age <30) {
 //   echo ' you are not young but not old' . '<br>';
//}
//elseif ($age < 60) {
  //  echo ' you are old but not to old' . '<br>';
//}
// else{
//     echo' you are to old' . '<br>';
//}



if ($age < 22 && $salary >= 500000) {
    echo 'Young  and rich' . '<br>';
}
elseif ($age <22 && $salary < 500000) {
    echo ' you are not young and not so rich' . '<br>';
}
elseif ($age > 60 && $salary >= 500000) {
    echo ' you are old but rich' . '<br>';
}
elseif ($age > 60 && $salary < 500000){
    echo' you are to old and not rich' . '<br>';
}




?>

