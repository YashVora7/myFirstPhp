<?php
session_start();

echo "Session started";

$_SESSION["username"] = "sessionUser1";
$_SESSION["email"] = "sessionUser1@example.com";

// echo "Hello ",$_SESSION["username"] , " your email is: " , $_SESSION["email"];


?>