<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $user=$_COOKIE['username'];
        $pass =$_COOKIE['password'];
        echo "User name in this Page".$user;
        echo "<br> User pass in this Page".$pass;
    ?>
</body>
</html>