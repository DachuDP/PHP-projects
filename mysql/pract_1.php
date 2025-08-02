<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method=post action=pract_1.php>
        Roll : <input type=text name=rollno><br>
        Name : <input type=text name=stuname><br>
        Physics Marks : <input type=text name=phymarks><br>
        Chemistry Marks : <input type=text name=chmmarks><br>
        <input type="submit" value=Submit name=sbmmarks>
    </form>
    <?php
        if(isset($_POST['sbmmarks'])){
            $roll=$_POST['rollno'];
            $name=$_POST['stuname'];
            $phy=$_POST['phymarks'];
            $chm=$_POST['chmmarks'];
            $con= mysqli_connect("localhost", "root","","college", 3307);
            //echo "databse connected sucess";
            $sql=("insert into studata values(?,?,?,?)");
            $ps=$con->prepare($sql); // tell mysql to get ready run the query
            $ps->bind_param("isii",$roll,$name,$phy,$chm);
            $ps->execute();

        }

    ?>
</body>
</html>
