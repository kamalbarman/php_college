<<<<<<< HEAD

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        margin: auto;
    }
    input[type="text"], input[type="number"] {
        margin: 10px 0;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    a {
        color: #4CAF50;
        text-decoration: none;
    }
    a:hover {
        color: #45a049;
    }
    @media (max-width: 600px) {
        form {
            max-width: 100%;
        }
    }

    .btn1{
        background-color: #1748ab;
        color: white;
    }
    </style>
</head>
<body>
   <button class="btn1"><a style="color: white;" href="select.php">select</a></button> 
    <button class="btn1"><a style="color: white;" href="insert.php">insert</a> </button>
<form action="" method ="POST">
    name <input type = " text" name= "name" value="<?php echo $result['Name'];?>">
    gender <input type =" text" name ="gender" value="<?php echo $result['Gender'];?>">
    contect <input type ="number" name="contect" value="<?php echo $result['Contect'];?>">
    adress <input type ="text" name ="adress" value="<?php echo $result['Adress'];?>">
    
    <input type ="submit" value="update" name="submit" >

</form>

</body>
</html>

