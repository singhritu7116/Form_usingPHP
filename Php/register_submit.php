<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_nmae="test_ex";

    $con= mysqli_connect($db_hostname,$db_username,$db_password,$db_nmae);
    if(!$con){
        echo "connection failed : ".mysqli_connect_errror();
        exit;
    }

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="INSERT INTO users (name, email, password) Values('$name','$email','$password')";
    $result=mysqli_query($con,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($con);
        exit;
    }
    echo"Registration Successful";
    mysqli_close($con);
    
?>