<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $user=$_POST['txtuser'];
        $pass=$_POST['txtpass'];
        session_start();
        $_SESSION['username']=$user;
        $_SESSION['userpass']=$pass;
        echo "user name: ".$user;
        echo "<br>user pass: ".$pass;




    ?>
    <form action="third_page.php" method="post">
        <input type="submit" value=Submit>
    </form>
    
</body>
</html>