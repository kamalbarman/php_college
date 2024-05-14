<?php
session_start();

include 'conect.php';

?>

<html>
    <head>
        <title>helo</title>
    </head>
    <body>
        hello"

        <h1><?php echo $_SESSION['name'];?></h1>
        <a href="logout.php">logout</a>
    </body>
</html>