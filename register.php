<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>register</title>
</head>

<body>
  <form action='<?php echo htmlentities($_SERVER['PHP_SELF']); ?>' method='POST'>

    <input type="text" id="fname" name="name" placeholder="enter name">
    <input type="text" id="fname" name="gender" placeholder="enter gender">
    <input type="email" id="fname" name="gmail" placeholder="enter gmail">
    <input type="password" id="fname" name="pass" placeholder="enter password">
    <input type="text" id="fname" name="adress" placeholder="enter adress">
    <input type="button" value="enter" name="submit">

  </form>
</body>

</html>

<?php
include 'conect.php';
if (isset($_POST['submit']))
 {
  $uname = $_POST['name'];
  $gender = $_POST['gender'];
  $gmail = $_POST['gmail'];
  $password = $_POST['pass'];
  $adress = $_POST['adress'];

  $iquery = "INSERT INTO  register (Name, Gender, Gmail,Password, Adress)
    values('$uname','$gender',' $gmail','$password','$adress')";

  $query = mysqli_query($con,$iquery);

  if ($query) { ?>
    <script>
      alert("insert successfully");
    </script>
  <?php }
   else { ?>
    <script>
      alert("not inserted");
    </script>
<?php }
}
?>