<?php 

    include('include/header.php');

    if (isset($_POST["submit"])){ 

    $name=$_POST["name"]; 
    $email=$_POST["email"]; 
    $message=$_POST["message"]; 

    echo "<center><br>Hello, ".$name."</center>"; 
    echo "<center><br>Your email is: ".$email."</center>"; 
    echo "<center><br>Your message has been received. Thanks!</center>"; 
    echo "<center><br>Your message is: <br>".$message."</center>"; 
    } 

    include('include/footer.php');

?>