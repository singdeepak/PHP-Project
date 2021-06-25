<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Signup.css" />
  </head>
  <body>
    <?php include 'Header.php';?>


<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
              echo "<script> alert('✔️ Registered Succussfully, Press OK to login'); </script>";
              header("Refresh:0; url=Login.php");
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>


    <div class="form_container">
    <div class="overlay">
      <div class="form">
        <form  method="POST" autocomplete="off">
          <label class="title1">Signup</label>
          
         <input    type="text" name="username" placeholder="Username" required  pattern="[A-Za-z]+" title="only letters are allowed"  ><br>
          <input type="email" name="email" placeholder="E-mail" required><br>
          <input type="password" name="password" placeholder="Password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  ><br>
          <input type="submit" value="Signup" name="signup"/><br><br>
		     <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
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
