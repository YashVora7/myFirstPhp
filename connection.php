<?php

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);

    if(!$conn){
        die("Connection Refused ".mysqli_connect_error());
    }
    echo "Success";

?>
