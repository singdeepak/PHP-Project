<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BMI</title>
	<link rel="stylesheet" href="CSS/BMI.css">
</head>
<body>
	<?php include 'Header.php';?>
	<div class="bmi_wrapper">
	  
	    <form action="<?php $_SERVER['PHP_SELF']; ?>" method=POST>
		<h1>Body Mass Index</h1>
		   <label for="weight">Weight <sub>(Kg)</sub></label><br>
		   <input type="text" name="weight" id="weight"><br>
		   <label for="height">Height <sub>(Meter)</subs></label><br>
		   <input type="text" name="height" id="height"><br><br>
		   <input type="submit" value="Calculate" name='bmi'>

		   <div class="result">
				<h1>
				<?php
					if(isset($_POST['bmi'])){
						$weight=$_POST['weight'];
						$height=$_POST['height'];
						$bmi=floatval($weight)/floatval($height*$height);
						echo "Your BMI = $bmi";
						}
				?>
				</h1>
		   </div>
		</form>

	</div>

	<?php include 'Footer.php';?>
	
</body>
</html>