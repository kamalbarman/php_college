
<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sis";


$con= mysqli_connect( $servername, $username, $password , $db_name);




if ($con) {
  echo("Connection successfully" );
}
else
  echo "Connected successfully";
?> 


