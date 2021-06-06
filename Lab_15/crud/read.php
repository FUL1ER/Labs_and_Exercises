<?php
	$connect = mysqli_connect("localhost", "root", "", "lab_15");

    if (!$connect) {
        printf("Connect failed: %s\n", mysqli_connect_error() );
        exit();
    }

    $content = mysqli_query($connect,"Select * from student");
    $content = mysqli_fetch_all($content);
    $connect->close();
?>