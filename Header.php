<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="CSS/Header.css">
</head>

<body>
    <!-- This is Header. -->
    <div class="header_container">


        <div class="logo">
            <span id="first">i</span>
            <span id="second">f</span>
            <span id="third">c</span>
        </div>




        <div class="navbar">
            <ul>
                <li><a href="Index.php" class="active">home</a></li>

                <div class="dropdown">
                    <li><a href="">service</a>
                        <div class="dropdown-content">
                            <a href="lose.php">Weight-Lose</a>
                            <a href="gain.php">Weight-Gain</a>
                            <a href="yoga.php">Yoga</a>
                        </div>
                </div>
                <li>
                    <div class="dropdown">
                        <a href="">excercise</a>
                        <div class="dropdown-content">
                        <a href="Excercise.php">videos</a>
                         <a href="Time.php">ifc-timer</a>
                        </div>
                    </div>
                </li>
                <li><a href="BMI.php">BMI</a></li>
                <li><a href="Address.php">contact</a></li>
            </ul>
        </div>



        <div class="join">
            <a href="Login.php">join</a>
        </div>
    </div>
</body>

</html>