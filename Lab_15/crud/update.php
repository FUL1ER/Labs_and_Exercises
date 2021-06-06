<?php
	$connect = mysqli_connect("localhost", "root", "", "lab_15");

    if (!$connect) {
        printf("Connect failed: %s\n", mysqli_connect_error() );
        exit();
    }
    $id = $_POST['id'];
	$group = $_POST['group'];
	$discipline = $_POST['discipline'];
	$evaluation = $_POST['evaluation'];

	$insert_data = "UPDATE student SET group = '$group', discipline = '$discipline', evaluation = '$evaluation' WHERE id = '$id'";

	echo $insert_data;

	mysqli_query($connect, $insert_data);
	
	$connect->close();

	header('Location: ../form/form_show.php');
?>