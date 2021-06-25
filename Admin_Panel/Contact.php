<?php 
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $des=$_POST['description'];

    $conn=mysqli_connect('localhost', 'root', '', 'project');

    $result="INSERT INTO `feedback`(`fullname`, `phone`, `email`, `feedback`) VALUES ('$username','$phone','$email','$des')";

    mysqli_query($conn, $result);

    header("refresh: 2; url=http://localhost/deepak/Gratitude.php");

    mysqli_close($conn);
?>