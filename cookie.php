<?php

    setcookie("user","user1",time()+3600,"/");

    $user = $_COOKIE['user'];

    echo $user;

?>