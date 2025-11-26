<?php
$box = 20;
$price = 1.75;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>DO WHILE LOOPS </title>
        <link rel="stylesheet" href ="css/styles.css">
    </head>
    <body>
<h1>The Chocolate Factory</h1>
<h2> Prices for each Boxes of Chocolate</h2>
<?php 
do {
    echo $box;
    echo 'each box costs $';
    echo '$price * $box';
    $box--;
}while ($box > 10)
?>
    </body>
</html>
