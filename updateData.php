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

    $sql = "SELECT * FROM `testtable`";

    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    echo $num;

    echo "<br>";

    while($row = mysqli_fetch_assoc($result)){
        echo $row['name']. " Your password is ".$row['password'];
        echo "<br>";
    }

    $sql = "UPDATE `testtable` SET `name`='yashUpdated' WHERE 1";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Suceess Updated";
    }
    else{
        echo "Not Updated";
    }

?>