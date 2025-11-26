<?php 
$prices = 1.50;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>For Loops</title>
        <link rel="stylesheet" href ="css/styles.css">
    </head>
    <body>
<h1>The Chocolate Factory</h1>
<h2>Price for large orders</h2>
<p>
<?php 
for ($i =10; $i <= 100; $i + 10) {
    echo $i;
    echo ' pack cost $';
    echo $prices *$i;
    echo '<br>';
}
?>
</p>
    </body>
</html>