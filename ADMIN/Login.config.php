<?php
// Access the form input values.
  $username=$_POST['username'];
  $password=$_POST['pwd'];




// Connection established with the Database.
  $conn=mysqli_connect('localhost','root');
  if (!$conn){
      echo "Connection Denied Try Again...<br>";
  }

  else{
      echo "Connection Successfully Established...<br>";
  }




//  Connect the Database or a table.
 mysqli_select_db($conn,'banekh');





//  Insert the data into table.
 $q="INSERT INTO login (username, pwd)
 VALUES ('$username', '$password')";






//  Query Fired here.
 mysqli_query($conn,$q);
 echo "Successfully Inserted Data in the table";


//  Finally diconnect the database connection.
 mysqli_close($conn);

?>



