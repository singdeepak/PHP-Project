<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="CSS/Header.css">

    <style>
        .logo h1{
            font-size:1.6em;
            color:dodgerblue;
            padding:0px 5px;
            text-transform:capitalize;
            border-left:1px solid red;
            border-right:1px solid red;
        }
    </style>
</head>

<body>
    <!-- This is Header. -->
    <div class="header_container">


        <div class="logo">
            <h1>🤝Hey, <?php echo $_SESSION['username']; ?>!</h1>
        </div>




        <div class="navbar">
            <ul>
                <li><a href="http://localhost/deepak/" class="active">home</a></li>

                <div class="dropdown">
                    <li><a href="">service</a>
                        <div class="dropdown-content">
                            <a href="http://localhost/deepak/lose.php">Weight-Lose</a>
                            <a href="http://localhost/deepak/gain.php">Weight-Gain</a>
                            <a href="http://localhost/deepak/yoga.php">Yoga</a>
                        </div>
                </div>
                <li>
                    <div class="dropdown">
                        <a href="">excercise</a>
                        <div class="dropdown-content">
                        <a href="http://localhost/deepak/Excercise.php">videos</a>
                         <a href="http://localhost/deepak/Time.php">ifc-timer</a>
                        </div>
                    </div>
                </li>
                <li><a href="http://localhost/deepak/BMI.php">BMI</a></li>
                <li><a href="http://localhost/deepak/Address.php">contact</a></li>
            </ul>
        </div>



        <div class="join">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>

</html>