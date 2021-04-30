<?php
    
    include_once 'dbs.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
      

    $sql="INSERT INTO users (name,email,subject,message) VALUES ('$name','$email','$subject','$message');";
    mysqli_query($conn,$sql);

    header("Location: ../main.html?success");