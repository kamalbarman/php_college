<html>
    <head>
        <title> view </title>
   </head>
   <body>
    <table>
        <thead >
            <!-- <tr style="border-inline: 5px solid red;">
                <td>Name </td>
                <td> Gender </td>
                <td> Contect </td>
                <td> Adress</td>
            </tr> -->
            <tr style="border: 1px solid black;">
    <td><strong>Name</strong></td>
    <td><strong>Gender</strong></td>
    <td><strong>Contact</strong></td>
    <td><strong>Address</strong></td>
</tr>

        </thead>
        <?php 
        include 'dbconect.php';
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
            </tr>
            <?php } ?>
        </tbody>
        </table>
        </body>              

        
                     