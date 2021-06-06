<?php
	$connect = mysqli_connect("localhost", "root", "", "lab_15");

    if (!$connect) {
        printf("Connect failed: %s\n", mysqli_connect_error() );
        exit();
    }

	$group = $_POST['group'];
	$discipline = $_POST['discipline'];
	$evaluation = $_POST['evaluation'];

	$insert_data = "INSERT INTO student (group, discipline, evaluation) VALUES ('" . $group ."','" . $discipline . "','" . $evaluation . "')";

	echo $insert_data;

	mysqli_query($connect, $insert_data);

	$connect->close();

	// header('Location: ../index.php');
?>