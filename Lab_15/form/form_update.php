<?php
	$connect = mysqli_connect("localhost", "root", "", "lab_15");

    if (!$connect) {
        printf("Connect failed: %s\n", mysqli_connect_error() );
        exit();
    }

	$id = $_GET['id'];

	$item = mysqli_query($connect, "Select * FROM student WHERE `id` = '$id'");
    $item = mysqli_fetch_all($item);

	$connect->close();
?>

<html>
    <head>
        <title></title>
        <meta content="" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>

    <body>
        <div align="center">
            <div class="con">
                <h3>Update item</h3>
        
                <form action="../crud/update.php" method="post">
                    <input type="hidden" id="custId" name="id" value="<?php echo $item[0][0]; ?>">
                    <p>Group</p>
                    <input type="text" name="group" value="<?php echo $item[0][1]; ?>">

                    <p>Discipline</p>
                    <input type="text" name="discipline" value="<?php echo $item[0][2]; ?>">

                    <p>Evaluation</p>
                    <input type="text" name="evaluation" value="<?php echo $item[0][3]; ?>">
  
                    <br><br>
                    <button type="submit">Updata</button>
                </form>
            </div>
        </div>   
    </body>
</html>