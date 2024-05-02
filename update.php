
<?php 
    include 'conect.php';
$sid = $_GET['id'];

// echo $sid;

$selectquery = "SELECT * FROM student where sid = $sid";
$query = mysqli_query($con, $selectquery);
// if (!$query) {
//     die("Query failed: " . mysqli_error($con));
// }

$result = mysqli_fetch_assoc($query);
// $result = mysqli_fetch_assoc($query);
// print_r($result['Name']);
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $contect = $_POST['contect'];
    $adress = $_POST['adress'];
    $updatequery ="UPDATE  student set name = '$name', gender='$gender', contect='$contect',adress='$adress'
        -- Name=$name;
        -- Gender=$gender;
        -- Contect=$contect;
        -- Adress=$adress;
    where sid = $sid";
    $query = mysqli_query($con,$updatequery);
    if($query)
    { ?>
    <script>

      alert("update successfully");
      
      </script>
      <?php
      header('Location:select.php');
     } else { ?>
        
      <script>
          alert("not updated");
      </script> 
<?php }
}

?>
<form action="" method ="POST">
    name <input type = " text" name= "name" value="<?php echo $result['Name'];?>">
    gender <input type =" text" name ="gender" value="<?php echo $result['Gender'];?>">
    contect <input type ="number" name="contect" value="<?php echo $result['Contect'];?>">
    adress <input type ="text" name ="adress" value="<?php echo $result['Adress'];?>">
    
    <input type ="submit" value="update" name="submit" >
    <a href="select.php">slect</a>
    <a href="insert.php">insert</a>


</form>
