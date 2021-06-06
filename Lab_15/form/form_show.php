<?php
    include '../crud/read.php';
?>

<html>
    <head>
        <title></title>
        <meta content="" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../main.css">
    </head>

    <style>
        table {
            width: 50%; 
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>

    <body>
        <div align="center">
             <table >
                <tr>
                    <th>ID</th>
                    <th>Назва групи</th>
                    <th>Назва дисципліни</th>
                    <th>Оцінки за тиждень</th>
                </tr>

                <?php
                    foreach ($content as $item) {
                ?>

                <tr>
                    <td><?=  $item[0] ?></td>
                    <td><?=  $item[1] ?></td>
                    <td><?=  $item[2] ?></td>
                    <td><?=  $item[3] ?></td>
                    <td><a href="form_update.php?id=<?=  $item[0] ?>">Update</a></td>
                    <td><a href="../crud/delete.php?id=<?=  $item[0] ?>">Delete</a></td>
                </tr>

                <?php 
                    }
                ?>

            </table>

            <button type="button"><a href="../index.php">Menu</a></button>

        </div>   
    </body>
</html>