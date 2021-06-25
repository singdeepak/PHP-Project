    <?php
    $fullname=$_POST['fullname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $pwd=$_POST['pwd'];

    $conn=mysqli_connect('localhost', 'root', '', 'project');
 


    $q="INSERT INTO `admin_signup`(`fullname`, `phone`, `email`, `username`, `pwd`) VALUES ('$username','$phone','$email','$username','$pwd')";
    
    mysqli_query($conn, $q);
    
 
    mysqli_close($conn);
    ?>