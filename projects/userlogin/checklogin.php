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
    //echo $user;
    //echo $pass;
    if(strcmp($user,"Darshan")===0 && strcasecmp($pass,"Darshan")===0){
        echo "<font color=green>Your valid user</font>";
    }else{

        echo "<font color=red>Your invalid user</font>";

    }
    
    ?>
</body>
</html>