<?php
  include("connection.php");
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    
    // exit();
    $sql ="INSERT INTO vivek(`name`,`email`,`Phone`,`subject`,`message`) VALUES('$name','$email','$phone','$subject','$message')";

   
    if ($conn->query($sql) === TRUE)
    {
  
    header("location:index.html");
    header("location:thankyou.html");

    

    }
    else
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    
  
  ?>