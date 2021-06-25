<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/Index.css">
    <link rel="stylesheet" href="<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Love+Ya+Like+A+Sister&display=swap" rel="stylesheet">
</head>

<body>
    <?php include 'Header.php';?>

    <!-- This is Background -->
    <div class="mainbg_wrapper">
        <div class="mainbg_overlay">
            <div class="mainbg_text">
                <span class="maintext1">&#8220;Your body can&nbsp;</span>
                <span class="maintext2">stand almost anything&#8221;</span>
                <form action="default.php">
                    <input type="text" placeholder="Try Something.....">
                    <input type="submit" value="Find">
                </form>
            </div>
        </div>
    </div>



    <!-- THIS IS SERVICE SECTION. -->
    <div class="service_container">
        <div id="service_items">our services</div>
        <div class="service_item">
            <img src="IMAGES/LOGO/logo2.png">
            <h1>strength</h1>
            <p> strength involves the performance of physical exercises which are designed to improve strength and endurance.</p>
        </div>
        <div class="service_item">
            <img src="IMAGES/LOGO/logo2.png">
            <h1>cardio</h1>
            <p>cardio is physical exercise of low to high intensity that depends primarily on the aerobic energy process.</p>
        </div>
        <div class="service_item">
            <img src="IMAGES/LOGO/logo2.png">
            <h1>lose</h1>
            <p>Reducing body fat is what most people want to achieve. itmore specific than weight loss. We can lose body fat by reducing calories.</p>
        </div>
        <div class="service_item">
            <img src="IMAGES/LOGO/logo2.png">
            <h1>gain</h1>
            <p>Weight gain can have causes that aren't due to underlying disease. Examples include overeating.</p>
        </div>
    </div>




    <!-- THIS IS MIDDLE BANNER. -->
    <div class="middle_banner">
        <div class="middle_banner_item1">
            <img src="IMAGES/BACKGROUND/bg_img3.jpg">
        </div>
        <div class="middle_banner_item2">
            <h2>about us</h2>
            <h1>fitness zone</h1>
            <p>Regular exercise and physical activity promotes strong muscles and bones. It improves respiratory, cardiovascular health, and overall health. Staying active can also help you maintain a healthy weight, reduce your risk for type 2 diabetes, heart disease, and reduce your risk for some cancerss.</p>
            <a href="About.php">about us</a>
        </div>
    </div>



    <!-- THIS IS OVERLAY SERVICE SECTION. -->
    <div class="wrapper">
        <div class="title">we serve</div>
        <div class="overlay_image">
            <img src="IMAGES/BACKGROUND/yoga.jpg">
            <div class="overlay">
                <div class="text">yoga</div>
                <a href="yoga.php">Explore</a>
            </div>
        </div>



        <div class="overlay_image">
            <img src="IMAGES/BACKGROUND/strength.jpg">
            <div class="overlay">
                <div class="text">strength</div>
                <a href="Strength.php">Explore</a>
            </div>
        </div>



        <div class="overlay_image">
            <img src="IMAGES/BACKGROUND/bg_img3.jpg">
            <div class="overlay">
                <div class="text">spinning</div>
                <a href="#">Explore</a>
            </div>
        </div>



        <div class="overlay_image">
            <img src="IMAGES/BACKGROUND/lose.jpg">
            <div class="overlay">
                <div class="text">lose</div>
                <a href="lose.php">Explore</a>
            </div>
        </div>



        <div class="overlay_image">
            <img src="IMAGES/BACKGROUND/gain.jpg">
            <div class="overlay">
                <div class="text">gain</div>
                <a href="gain.php">Explore</a>
            </div>
        </div>



        <div class="overlay_image">
            <img src="IMAGES/BACKGROUND/muscle.jpg">
            <div class="overlay">
                <div class="text">muscles</div>
                <a href="Muscles.php">Explore</a>
            </div>
        </div>
    </div>







<!-- This is form. -->
    <div class="container">
        <div class="form">
            <form action="Admin_Panel/Contact.php" method="POST" autocomplete="off">
                <label>Feedback</label><br>
                <input type="text" name="username" placeholder="Name" class="name" required>
                <input type="text" name="phone" placeholder="Phone" class="name" required><br>
                <input type="email" name="email" placeholder="E-mail" required><br>
                <textarea name="description" placeholder="Let us know your feedback..." required></textarea><br>
                <input type="submit" value="send" name="feedback">
            </form>
        </div>
    </div>
    
    <?php include 'Footer.php';?>
</body>
</html>