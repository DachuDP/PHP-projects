<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


    <form method=post action='userlogin.php'>
        <table border=2>
            <tr>
                <th>User Name</th>
                <td><input type=text name=txtuser></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type=password name=txtpass></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type=submit value=Submit name=submitbtn>
                    <input type=reset value=Reset>
                </td>
            </tr>
        </table>
    </form>    
    <?php
        if(isset($_POST['submitbtn'])){
            $user=$_POST['txtuser'];
            $pass=$_POST['txtpass'];
            //echo $user;
            //echo $pass;
            if(strcmp($user,"Darshan")===0 && strcasecmp($pass,"Darshan")===0){
                //echo "<font color=green>Your valid user</font>";
                header("Location:index.html");
            }else{

                echo "<font color=red>Your invalid user</font>";
            } 
        }    
    ?>
    
</body>
</html>