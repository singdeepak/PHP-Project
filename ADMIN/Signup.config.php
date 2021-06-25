<?php
// Access the form input values.
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $pwd=$_POST['pwd'];




// Connection established with the Database.
  $conn=mysqli_connect('localhost','root');
  




//  Connect the Database or a table.
 mysqli_select_db($conn,'banekh');





//  Insert the data into table.
 $q="INSERT INTO signup (username, phone, email, pwd)
 VALUES ('$username', '$phone', '$email', '$pwd')";






//  Query Fired here.
 mysqli_query($conn,$q);
//  echo "Successfully Inserted Data in the table";


//  Finally diconnect the database connection.
 mysqli_close($conn);

 header("refresh: 2; url=http://localhost/deepak/Login.php")

?>



