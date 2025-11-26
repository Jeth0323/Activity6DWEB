<?php
$day = 'Monday';

switch ($day){
    case 'Monday':
    $offers = '20% off';
    break;
    case 'Sunday':
    $offers = '30% off';
    break;
    default: 
    $offers = 'buy 5 for the price of sox ';

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Switch Statment </title>
        <link rel="stylesheet" href ="css/styles.css">
    </head>
    <body>
<h1>The Chocolate Factory</h1>
<h2>Offers on <?= $day; ?></h2>
<p><?= $offers ?></p>
    </body>
</html>