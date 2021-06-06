<?php
 
$a = $_POST["a"];
$b = $_POST["b"];

$sum = $a + $b;
$riz = $a - $b;
$dob = $a * $b;
$dil = $a / $b;

echo ("<font color=#FF0000><h2>Математичний приклад</h2></font>");
echo ("a =$a, b =$b<br><br>");

echo "sum= $sum<br>";
echo "riz= $riz<br>";
echo "dob= $dob<br>";
echo "dil= $dil<br>";

$e = 2.718281;

$q = ( abs($_POST["d"] + $_POST["f"]) + tan(pow($_POST["f"], 2) + pow($_POST["h"], 2)) ) / ($_POST["k"] + 4 * log($_POST["f"]));
$u = ($_POST["h"] + pow(sin($_POST["k"]), 2) + cos($_POST["h"])) / (pow($e, $_POST["f"]) + $_POST["d"] * log($_POST["h"] + $_POST["k"]));

echo "<br>q= $q<br>";
echo "u= $u<br>";
?>
