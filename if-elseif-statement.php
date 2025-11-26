<?php
$stock = 20;
$ordered = 12;

if ($stock > 0) {
    $message = 'In Stock';
}   elseif ($ordered > 0) {
    $message = 'Better Luck Next time';
}   else {
    $message = 'Sorry its out of stock';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>IF...ELSEIF... </title>
        <link rel="stylesheet" href ="css/styles.css">
    </head>
    <body>
<h1>The Chocolate Factory</h1>
<h2>Chocolate</h2>
<p><?= $message ?></p>
    </body>
</html>