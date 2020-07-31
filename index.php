<?php 

require 'animal.php';
require 'frog.php';
require 'ape.php';

$sheep = new Animal("shaun");

echo $sheep->name; // "shaun"
echo "<br>";
echo $sheep->legs; // 2
echo "<br>";
echo $sheep->cold_blooded; // false
echo "<br><br>";

$sungokong = new Ape("kera sakti");
echo $sungokong->name;
echo "<br>";
echo $sungokong->legs;
echo "<br>";
echo $sungokong->cold_blooded;
echo "<br>";
$sungokong->yell(); // "Auooo"
echo "<br><br>";

$kodok = new Frog("buduk");
echo $kodok->name;
echo "<br>";
echo $kodok->legs;
echo "<br>";
echo $kodok->cold_blooded;
echo "<br>";
$kodok->jump(); // "hop hop"

?>