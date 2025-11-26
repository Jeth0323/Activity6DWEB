<?php
    $items = 3;
    $cost = 5;
    $subtotal = $cost *$items;
    $tax = ($subtotal/100)*20;
    $total = $subtotal + $tax;

?>
<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width-device-widthy, initial-scale=1">
<title>Expression & Operators</title>
<link rel="stylesheet" href ="css/styles.css">
</head>
<body>
   <h1>Candy Store</h1>
    <h2>Shopping Cart</h2>
   <p>Items: P<?=$items ?></p> 
   <p>Cost per pack: P<?=$cost ?></p> 
   <p>Subtotal: P<?=$subtotal ?></p> 
   <p>Tax: P<?=$tax ?></p> 
   <p>Total: P<?=$total ?></p> 
</body>
</html>
