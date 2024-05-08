<?php
    include 'conect.php';


if (isset($_POST['submit'])) {
   $username = $_POST['uname'];
   $password = $_POST['pass'];

   $selectquery = "SELECT * FROM varify WHERE  uname = $username";

   $query = mysqli_query($con,$selectquery);

    $uname_count = mysqli_fetch_assoc($query);

    if($$uname_count){
    {
        $upass = mysqli_fetch_assoc($query);
        $_SESSION['name'] =$upass['name'];
        $dpass= $upass['password'];
        $pass_decode = password_verify($password,$dpass);

        

    }
    }
}