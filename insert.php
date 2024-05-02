<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>information</title>
  <!-- <link rel="stylesheet" href="asset/css/insert.css"> -->
  <style>
    body{
  background-color: #dde5f4;
  backdrop-filter: blur(2px);
}
input[type=text], select, textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }
  
  /* Style the label to display next to the inputs */
  label {
    padding: 12px 12px 12px 0;
    display: inline-block;
  }
  
  /* Style the submit button */
  input[type=submit] {
    background-color: #1748ab;
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: right;
    margin-top: 1rem;
  }
  
  /* Style the container */
  .container {    
  height: 90;
  width: 30%;
  margin-left: 30%;
  margin-top: 15%;
  /* outline: solid 1px black; */
  
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    background-color: #f1f7fe;
    
    padding: 20px;
  }
  
  /* Floating column for labels: 25% width */
  .col-25 {
    float: left;
    width: 35%;
    /* margin-top: 6px; */
  }
  
  /* Floating column for inputs: 75% width */
  .col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
  }
  
  /* Clear floats after the columns */
  /* .row:after {
    content: "";
    display: table;
    clear: both;
  } */
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  

  /* @media screen and (max-width: 600px) {
    .col-25, .col-75, input[type=submit] {
      width: 100%;
      margin-top: 0;
    }
  } */


  .row{
    margin-top: 1rem;
  }
  </style>
</head>
<body>

<div>
   <button><a href="select.php">select</a></button>
   </div> 

  <div class="container">
  
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Your name..">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="country">Gender</label>
      </div>
      <div class="col-75">
        <select id="country" name="gender">
          <option value="select gender">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Contect</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="contect" placeholder="enter your Contect number ">
      </div>
    </div>
 
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Adress</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="adress" placeholder="enter your Adress">
      </div>
    </div>



    <div class="row">
      <input type="submit" value="submit" name="submit">
    </div>

  </form>

</div>
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
