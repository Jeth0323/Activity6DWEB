<?php
$packets = 20;
$price = 1.50;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Do WHILE LOOPS </title>
        <link rel="stylesheet" href ="css/styles.css">
    </head>
    <body>
<h1>The Chocolate Factory</h1>
<h2> Prices for Packs of Chocolate</h2>
<?php 
do {
    echo $packets;
    echo ' packets cost $';
    echo '$price *$packs';
    echo '<br>';
    $packets--;
}while ($packets => 0)
?>
    </body>

</html>

