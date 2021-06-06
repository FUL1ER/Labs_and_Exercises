<?php

$group = $_GET["group"];
 
$pattern = "/(К)(Н)*/";

if (preg_match($pattern, $group)) {
    echo "Студентам групи КН слава!";
} else {
    echo "А що це за група?";
}
?>
