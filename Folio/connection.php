<?php
    
    //echo "hey are you learning php";
    //echo phpversion();
    //exit();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database="my_portfolio";
    
    // Create connection
    $conn =new mysqli($servername, $username, $password,$database);
    if(!$conn)
    {
        echo "NOT CONNECTED".$conn->connect_error;
        exit();
        
    }
    else
    {
        //$db=mysqli_select_db('student',$conn);
       //echo "connected"; 
    }
    /*$viv="select * from student";
    echo "<br>";
    $result=$conn->query($viv);
    echo mysqli_next_result($result['name']);
    */
?>