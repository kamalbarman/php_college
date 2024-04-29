<html>
    <head>
        <title> view </title>
   </head>
   <body>
    <table>
        <thead >
            <tr style="border : 1px solid black;">
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
                <td><a href="delete.php?id=<?php echo $result['sid'];?>">delete</a></td><?php } ?>
        </tbody>
        </table>
        </body>              

        
                     