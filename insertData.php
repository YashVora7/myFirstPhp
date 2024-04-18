
<form action="insertData.php" method="post">
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="password" name="password">
    <input type="submit" value="submit">
</form> 


<?php

    // $servername = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "test";

    // $conn = mysqli_connect($servername, $username, $password, $database);

    // if(!$conn){
    //     die("Connection Refused ".mysqli_connect_error());
    // }
    // echo "Successfully Connect Database";

    // $name = $_POST['name'];
    // $password = $_POST['password'];


    // $sql = "INSERT INTO `firsttable` (`name`, `password`) VALUES ('$name', '$password');";

    // $result = mysqli_query($conn, $sql);

    // if($result){
    //     echo "<br>data created successfull";
    // }
    // else{
    //     echo "data not created because of thisssssssssssssssssss".mysqli_error($conn);
    // }



?>

<?php

    // if($_SERVER['REQUEST_METHOD']=='POST'){
    //     $name = $_POST['name'];
    //     $password = $_POST['password'];
    
    //     echo "<h1> Your Name is ".$name." And Your Password is ".$password."</h1>";
    
    //     $servername = "localhost";
    //     $username = "root";
    //     $password = "";
    //     $database = "test";
    
    //     $conn = mysqli_connect($servername, $username, $password, $database);
    
    //     if(!$conn){
    //         die("Connection Refused ".mysqli_connect_error());
    //     }
    //     echo "Successfully Connect Database";
    
    //     $sql = "INSERT INTO `firsttable` (`name`, `password`) VALUES ('$name', '$password');";
    
    //     $result = mysqli_query($conn, $sql);
    
    //     if($result){
    //         echo "<br>data created successfull";
    //     }
    //     else{
    //         echo "data not created because of thisssssssssssssssssss".mysqli_error($conn);
    //     }
    
    // }

?>