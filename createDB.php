<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn){
        die("Connection Refused ".mysqli_connect_error());
    }
    echo "Success";

    $sql = "CREATE DATABASE newDataBase";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Database created successfull";
    }
    else{
        echo "Database not created because of thisssssssssssssssssss".mysqli_error($conn);
    }



?>
