<!DOCTYPE html>
<html>
    <head>
    <title>L.O.V.E - Frank Sinatra</title>
    <style>
        body {background-color: #ffffff; padding: 20px;}
        h1, h2 {color: #b22222; }
        .verse, .chorus{margin-bottom: 20px; }
        .chorus{font-weight: bold; color: #ff4500;}
        .tag {font-style: italic; color: #555; }
        .container{max-width: 600px; margin: 0 auto; text-align: center;
        }

    </style>
    </head>

<body>
<div class="container">
<?php 
$title ="L.O.V.E";
$artist ="Frank Sinatra";
$mood ="In Love";
$verseCount = 2;
$repeatChorus = "2";
$nouns = ["love","heart"];
$verbs = ["adore", "give","look","see","take","break"];
$adjective =["extraordinary"];
$verse1 = [
    "L is for the way you {$verbs[2]} at me",
    "O is for the only one i {$verbs[3]}",
];
$verse2 = [
    "V is very, very {$adjective[0]} at me",
    "E is even more than any one that you {$verbs[0]} can",
];

$chorus = [
    "{$nouns[0]} is all that I can {$verbs[1]} to you.",
    "{$nouns[0]} is more than just a game for two.",
    "Two in {$nouns[0]} can make it.",
    "{$verbs[4]} my {$nouns[1]} and please don't {$verbs[5]} it"
];
$verse3 =["{$nouns[0]} was made for me and you","{$nouns[0]} was made for me and you",
"{$nouns[0]} was made for me and you"];

echo "<h1>$title</h1>";
echo "<h2>by $artist</h2>";
echo "<p class='tag'>Mood: $mood</p>";

echo "<div class='verse'>";
foreach ($verse1 as $line) {
    echo "<p>$line</p>";
}
echo "</div>";

echo "<div class='verse'>";
foreach ($verse2 as $line) {
    echo "<p>$line</p>";
}
echo "</div>";


echo "<div class='chorus'>";
foreach ($chorus as $line) {
    echo "<p>$line</p>";
}
echo "</div>";

echo "<div class='verse'>";
foreach ($verse1 as $line) {
    echo "<p>$line</p>";
}
echo "</div>";

echo "<div class='verse'>";
foreach ($verse2 as $line) {
    echo "<p>$line</p>";
}
echo "</div>";


echo "<div class='chorus'>";
foreach ($chorus as $line) {
    echo "<p>$line</p>";
}
echo "</div>";

echo "<div class='verse'>";
foreach ($verse3 as $line) {
    echo "<p>$line</p>";
}
echo "</div>";

$totalLines = $repeatChorus + $verseCount + 15; 
$choruslines = $repeatChorus * 4; 
$verselines = $verseCount * 5.5;
echo "<p class='tag'>Total lines shown: $totalLines</p>";
echo "<p class='tag'>Total chorus lines: $choruslines</p>";
echo "<p class='tag'>Total verse lines: $verselines</p>";
//Created by: James Jethro P. Dizon
//Section: WD-203
//Date created: November 19 2025
//What i did: i created a program where i need to call nouns, verbs and adjectives in order for it to appear on my php line by line and wrote the lyrics of one of my favorite songs titled L.O.V.E made by Frank Sinatra.
?>
</div>

</body>

</html>
