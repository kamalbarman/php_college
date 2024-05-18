<html>
    <head>
        <title>Log In</title>
    </head>
    <body>
        <h1>Log In</h1>
        <form action='<?php echo htmlentities($_SERVER['PHP_SELF']);?>' method='post'>
            Email: <input type="text" name="email"><br>
            Password: <input type="password" name="passw"><br>
            <input type="submit" value="Log In" name="submit">
        </form>
    </body>
</html>

<?php
include 'conect.php'; 
session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $passw = $_POST['passw'];
    
    $sql = "SELECT * FROM register WHERE Gmail= '$email'";
    $query = mysqli_query($con, $sql);
    $uname_count = mysqli_num_rows($query);

    if ($uname_count) { // Corrected from $email_count to $uname_count
        $upass = mysqli_fetch_assoc($query);
        $_SESSION['uname'] = $upass['Name'];
        $dpass = $upass['Password'];

        if ($dpass == $passw) {
            echo "Log in successful";
            
            ?>
            <script>
                window.location.href = 'data.php';
            </script>
            <?php
        } else {
            echo "Password wrong";
        }
    } else {
        echo "Invalid username";
    }
}
?>
