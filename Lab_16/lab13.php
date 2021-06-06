<?php

$group = $_POST["group"];
 
$pattern = "/(К)(Н)*/";

if (preg_match($pattern, $group)) {
    echo "Студентам групи КН слава!";

    $filename = 'lite_db.txt';
        $text = "group = " . $_POST["group"] . "\n<br>".
            "name_of_discipline = " . $_POST["name_of_discipline"] . "\n<br>".
            "evaluation_for_week = " . $_POST["evaluation_for_week"] . "\n<br>".
            "email = " . $_POST["email"] . "\n<br>".
            "phone = " . $_POST["phone"] . "\n<br>".
            "<br>---КОНІЕЦ!---\n";

            file_put_contents($filename, $text);

        echo "<br><button type=\"button\"><a href=\"menu.php\">On menu</a></button>";

} else {
    echo "А що це за група?";
}
?>

