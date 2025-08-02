<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method=post action=connect.php>
        ID:<input type=text name=txtid>
        <br>Name:<input type=text name=txtname>
        <br> Salary:<input type=text name=txtsal>
        <br> Departent<input type=text name=txtdep>
        <b>
            <input type="submit" name="btnsubmit">
    </form>
    <?php
    if(isset($_POST['btnsubmit']))
    {
        $eid = $_POST['txtid'];
        $ename = $_POST['txtname'];
        $esal = $_POST['txtsal'];
        $edept = $_POST['txtdep'];
        $mycon=mysqli_connect("localhost","root","","mydatabase",3307);
        echo "connection sucess";
        $sql="insert into emp values(?,?,?,?)";
        $ps=$mycon->prepare($sql);
        $ps->bind_param("isis",$eid,$ename,$esal,$edept);
        $ps->execute();
        echo "Record inserted";
    }
    ?>
</body>
</html>