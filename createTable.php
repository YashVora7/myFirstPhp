<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "newDataBase";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Connection Refused ".mysqli_connect_error());
    }
    echo "Success";

    $sql = "CREATE TABLE `demo`.`thirdtable` (`s.no` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(100) NOT NULL , `password` VARCHAR(100) NOT NULL , PRIMARY KEY (`s.no`));
    ";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Table created successfull";
    }
    else{
        echo "Table not created because of thisssssssssssssssssss".mysqli_error($conn);
    }



?>
