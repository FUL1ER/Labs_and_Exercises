<?php
session_start();

$login = $_POST["login"];

setcookie("login", $login);

if(isset($login)) {
    header( "Location: menu.php" );
    exit();
}
else {
    echo "Error input data";
    session_destroy();
}
?>