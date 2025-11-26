<?php
$fname ="James Jethro";
$lname ="Dizon";
$price =20;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Variables</title>
        <link rel="stylesheet" href ="css/styles.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Welcome <?php echo $fname; ?> <?php echo $lname; ?></h2>
        <p>The cost of your candy is $<?php echo $price; ?></p>
    </body>
</html>