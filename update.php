<?php 
    include 'dbconect.php';
$uid = $_GET["id"];
$selectquery = "select * from student where sid = $uid";
$query = mysqli_query($con, $selectquery);
$result = mysqli_fetch_assoc($query);
?>
