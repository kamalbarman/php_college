<?php
include 'conect.php';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $passw=$_POST['pass'];
    $sql="SELECT * from register where email= $email";
    $query= mysqli_query($con,$sql);
    $uname_count=mysqli_num_rows($query);
    if($email_count)
    {
        $upass=mysqli_fetch_assoc($query);
        $_SESSION['name']=$upass['email'];
        $dpass=$upass['passw'];
       
        if($dpass==$passw)
        {
            echo "Log in successful";
        ?>
        <script>
            window.location.href='data.php';
            </script>
        <?php 
        }
        else
        {
            echo"Password wrong";
        }  
    }
   
    else
    {
        echo "Invalid username";
    } 
    
}    

?>