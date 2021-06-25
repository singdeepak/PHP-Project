<?php
// Access the form input values.
  $username=$_POST['username'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $query=$_POST['description'];




// Connection established with the Database.
  $conn=mysqli_connect('localhost','root');
  if (!$conn){
      echo "Connection Denied Try Again...<br>";
  }

  else{
      echo "Connection Successfully Established...<br>";
  }




//  Connect the Database or a table.
 mysqli_select_db($conn,'project');





//  Insert the data into table.
 $q="INSERT INTO contact (username, phone, email, problem)
 VALUES ('$username', '$phone', '$email', '$query')";






//  Query Fired here.
 mysqli_query($conn,$q);
 echo "Successfully Inserted Data in the table";


//  Finally diconnect the database connection.
 mysqli_close($conn);

?>



