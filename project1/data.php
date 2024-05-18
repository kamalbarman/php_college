<?php
session_start();

include 'conect.php';

?>

<!DOCTYPE html>
<head>
    <title>Hello</title>
</head>
<body>
  
    <h1>hello
      <?php echo $_SESSION['uname'];
      ?>
    </h1>
    
    <a href="logout.php">Logout</a>
</body>
</html>
