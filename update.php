<?php 
    include 'dbconect.php';
$uid = $_GET["id"];
$selectquery = "SELECT * FROM student where sid = $uid";
$query = mysqli_query($con, $selectquery);
$result = mysqli_fetch_assoc($query);
?>
