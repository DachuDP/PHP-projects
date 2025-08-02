<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
        $username=$_SESSION['username'];
        $userpass=$_SESSION['userpass'];
        echo "USER NAME in this page".$username;
        echo "<br>USER PASSWORD in this page".$userpass;
        session_unset();
        session_destroy();
        // echo "After session close : ".$username;
    ?>
</body>
</html>