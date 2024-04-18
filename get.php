<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" placeholder="name" id="name" name="name">
        <input type="text" placeholder="password" id="password" name="password">
        <input type="submit" value="Submit">
    </form>
    <?php


        if($_SERVER['REQUEST_METHOD']=='POST'){
            $name = $_POST['name'];
            $password = $_POST['password'];

            echo "<h1> Your Name is ".$name." And Your Password is ".$password."</h1>";
        }

    ?>
</body>
</html>