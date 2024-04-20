<?php

session_start();

if(isset($_SESSION["username"])){

    echo "Hello ",$_SESSION["username"] , " your email is: " , $_SESSION["email"];
}
else{
    echo "You are not logged in";
}

?>