<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mycon=mysqli_connect("localhost","root","","mydatabase","3307");
       // echo "Connection Seccess <br>";
        $sql="select * from emp";
         $record=$mycon->query($sql);
         $n = mysqli_num_rows($record);
         //echo "Total Record".$n;

         if($n>0){
            while($row=mysqli_fetch_row($record)){
                echo $row[0]." ".$row[1]." ".$row[2]." ".$row[3];
                echo "<br>";
            }

        }else{
             echo "<font color=red size=5>Record not found</font>";

         }


    ?>
    
</body>
</html>