<html>
  <head> <title> informating </title> </head>
  <body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="POST">
    name <input type = " text" name= "name">
    gender <input type =" text" name ="gender">
    contect <input type ="number" name="contect">
    address <input type ="text" name ="adress">
    <input type ="submit" value="submit" name="submit" >
</form>
</body>
</html>

    <?php 
    include "conect.php";
    if(isset($_POST['submit']))
    {
      $name = $_POST ['name'];
      $gender =$_POST['gender'];
      $contect =$_POST['contect'];
      $adress =$_POST['adress'];

      $insertquery ="INSERT INTO student(Name,Gender,Contect,Adress)
      values('$name','$gender','$contect','$adress')";
      $query= mysqli_query($con,$insertquery)  ;
      if($query)
      { ?>
      <script>
        alert("insert successfully");
        </script>
        <?php } else { ?>
        <script>
            alert("not inserted");
        </script> 
 <?php }
    }
    ?>