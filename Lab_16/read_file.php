<html>
    <head>
        <title></title>
        <meta content="" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div align="center">
            <div class="con">
                <h1>You all data</h1>

                <?php
                    echo file_get_contents("lite_db.txt");
                    echo "<br><button type=\"button\"><a href=\"menu.php\">On menu</a></button>";
                ?>
            </div>
        </div>  
    </body>
</html>