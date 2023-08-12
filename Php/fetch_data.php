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
    $sql="SELECT * FROM users";
    $result=mysqli_query($con,$sql);
    if(!$result){
        echo "Error: ".mysqli_error($con);
        exit;
    }

    while($row=mysqli_fetch_assoc($result)){
        echo $row['name']. "<br>";
    }
    
    
    mysqli_close($con);
    
?>