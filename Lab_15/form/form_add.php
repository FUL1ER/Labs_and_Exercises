<html>
    <head>
        <title></title>
        <meta content="" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>

    <body>
        <div align="center">
            <div class="con">
                <h3>Add new student</h3>
        
                <form action="../crud/create.php" method="post">
                    <p>Назва групи:</p>
                    <input type="text" name="group">

                    <p>Назва дисципліни:</p>
                    <input type="text" name="discipline">

                    <p>Оцінки за тиждень:</p>
                    <input type="text" name="evaluation">

                    <br><br>
                    <button type="submit">Add</button>
                    <button type="button"><a href="../index.php">Menu</a></button>
                </form>
            </div>
        </div>   
    </body>
</html>