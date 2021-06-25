<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/Login.css">
</head>
<body>
   <?php include 'Header.php';?>
   <?php
        require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: Admin.php");
        } else {
            echo "<script>alert('Incorrect details please fill the correct details & try again');</script>";
            header("Refresh: 0; url=Login.php");
        }
    } 
    
    
    else {
?>

    <div class="form_container">
    <div class="overlay">
        <div class="form">
            <form class method="POST" autocomplete="off">
                <label class="title1">Login</label>
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <!-- <button name="login" type="submit">login</button> -->
                <input type="submit" value="Login" name="login"><br>
                <label class="title2"> Don't have Account ? <a href="registration.php">Signup-Now</a></label>
            </form>

        </div>
        </div>
    </div>
	
	<?php
	}
	?>
	
    <?php include 'Footer.php';?>
</body>
</html>