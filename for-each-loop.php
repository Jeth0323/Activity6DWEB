<?php 
$products = [
    'Cadbury' => 5,
    'Fudge' => 3,
    'Choco Mints' => 2
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ForEach Loops </title>
        <link rel="stylesheet" href ="css/styles.css">
    </head>
    <body>
<h1>The Chocolate Factory</h1>
<h2>Price list</h2>
<table>
    <tr>
        <th>Items</th>
        <th>Prices</th>
    </tr>
    <?php foreach ($products as $item => $price) {    ?>
        <tr>
            <td><?= $item ?></td>
            <td><?= $price ?></td>
        </tr>
        <?php }?>
</table>
    </body>
</html>