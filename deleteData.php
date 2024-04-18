<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Connection Refused ".mysqli_connect_error());
    }
    echo "Successfully Connect Database";

    $sql = "DELETE FROM `testtable` WHERE `name`='yasVora' LIMIT 4";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<br>Deleted Seccess";
    }

?>