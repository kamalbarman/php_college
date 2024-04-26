<html>
  <head> <title> informating </title> </head>
  <body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="post">
    name <input type = " text" name= "name">
    gender <input type =" text" name ="gender">
    contect <input type =" number" name="contect">
    address <input type =" text" name ="adress">
    <input type ="submit" value="submit" name="submit" >
</form>
</body>
</html>

    <?php 
    include "dbconect.php" ;
    if (!$con) {
      echo(mysqli_connect_error());
  }
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $name = $_POST['name'];
      $gender =$_POST['gender'];
      $contect =$_POST['contect'];
      $address =$_POST['adress'];

      $insertquery ="INSERT INTO student (Name,Gender,Contect,Adress)
      VALUES ('$name','$gender','$contect','$address')";
      $query = mysqli_query($con,$insertquery);
      if ($query) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($con);
    }
      echo($query);

    }
    ?>