<?php
	$connect = mysqli_connect("localhost", "root", "", "lab_15");

    if (!$connect) {
        printf("Connect failed: %s\n", mysqli_connect_error() );
        exit();
    }

	$id = $_GET['id'];

	mysqli_query($connect,"DELETE from `student` WHERE `id` = '$id'");
	
	$connect->close();

	header('Location: ../form/form_show.php');
?>