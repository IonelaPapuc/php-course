<?php


//echo'<pre>';
//var_dump($_GET);
//echo '</pre>';
$keyword = ' ';
if(isset($_GET['keyword'])) {
    $keyword = $_GET['Keyword'];
    echo $keyword . '<br>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="text" name="Keyword"
           placeholder="Type and hit enter" value="<?php  echo $keyword?>"
    <button>Search</button>
</form>
</body>
</html>