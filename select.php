<body><table>
    <thead>
        <tr>
            <td>roll no</td>
            <td>name</td>
        </tr>
    </thead>
<?php
    include 'dbconnect.php';
    $selectquery = "SELECT * FROM student";
    $query = mysqli_query($con, $selectquery);
    while($result = mysqli_fetch_assoc($query)){
        ?>
        <tbody>
            <tr>
                <td><?php echo $result['sid'];?></td>
                <td><?php echo $result['Name'];?></td>
            </tr>
        </tbody>
        <<?php } ?>
    </tbody>
    </table>
    </body>

    <td>
        <a href="update.php ? id=<?php echo $result ['sid'];?>"></a>
    </td>
