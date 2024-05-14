<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>information</title>
    
     <link rel="stylesheet" href="register.css">
</head>
<body>
    <h2>enter your inmormations</h2>
    <div class="container">
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        
    <div class="name"><input class="input" type="text" name="name" placeholder="Enter your name"></div>
        
        <div><input class="input" type="text" name="gender" placeholder="Enter your gender"></div>
        
        <div><input class="input" type="text" name="email"  placeholder="Enter your email"></div>
        
        <!-- <input class="input" type="email" name="email" placeholder="Enter your email"> -->

        
        <div><input class="input" type="password" name="password"  placeholder="Enter your  password"></div>

        <div><input class="input" type="text" name="adress"  placeholder="Enter your  adress"></div>
        
        <div><input   class="submit" type="submit" name="submit" value="submit"></div>
    </form>
    </div>
</body>
</html>

<?php
    
    include "conect.php";

  
    if(isset($_POST["submit"]))
    {
        
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $adress = $_POST['adress'];
              
        $insertquery = "INSERT INTO register (Name,Gender,Gmail,Password,Adress)
         VALUES ('$name', '$gender', '$email', '$password', '$adress')";
       
        $query = mysqli_query($con, $insertquery);
               
        if($query) { ?>
            <script>
                alert("Sign_Up_successfully");
            </script>
<?php
        } else { ?>
            <script>
                alert("something went error");           
            </script> 
<?php
        }
    }
?>
