<html>
    <head>
        <title> view </title>
        <style>
            table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        border: 1px solid black;
        padding: 15px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }

    .btn1{
        
        background-color: #1748ab;
        width: 5rem;
        border-radius: 10%;
        
    }
        </style>
   </head>
   <body>
   <button class="btn1"><a style="color: white; text-decoration: none;" href="insert.php">insert</a></button> 
    
<br>
<br>
    <table >
        <thead >
            <tr>
                <td > NAME </td>
                <td> GENDER </td>
                <td> CONTECT </td>
                <td> ADDRESS </td>
            </tr>
        </thead>
        <?php 
        include "conect.php" ;
        $selectquery = "SELECT * FROM student";
        $query = mysqli_query ($con, $selectquery);
        while ( $result = mysqli_fetch_assoc($query))
        
        {?>
        <tbody>
            <tr>
                <td> <?php echo $result['Name'];?> </td>
                <td> <?php echo $result['Gender'];?> </td>
                <td> <?php echo $result['Contect'];?> </td>
                <td> <?php echo $result ['Adress'];?> </td>
                <td><a href="update.php?id=<?php echo $result['sid'];?>">edit</a></td>
                <td><a href="delete.php?id=<?php echo $result['sid'];?>">delete</a></td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
        </body>              

        
                     