<?php 
    include 'conect.php';

    $did = $_GET["id"];

    $deletequery = 'DELETE FROM student WHERE  sid = $did';

    $query = mysqli_query($con ,$deletequery);

    if($query)
    { ?>
    <script>

      alert("record deleted");
      
      </script>
      <?php
      header('Location:select.php');
     } else { >
        
      <script>
          alert("not deleted");
      </script> 
<?php }
?>