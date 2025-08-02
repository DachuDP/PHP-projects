<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin :0;
            padding:0;
            background : #f2f2f2;
        }
        .header{
            background: #333;
            color : white;
            padding : 20px;
            text-align : center:

        }
        .container{
            width; 90%;
            max-width: 1000px;
            margin ; 30px auto:;
            background: white;
            padding : 30px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            border-radius : 12px;

        }
        h2{
            text-align:center;
            margin-bottom : 20px;
            color:#444;
        }
        .btn{
            display: inline-block;
            margin-bottom : 20px;
            padding : 10px 20px;
            background: #28a745;
            color: white;
            text-decoration : none;
            border-radius: 5px;
            font-weight :500;
            

        }
        table{
            width:100%;
            border-collpse: collapse;
            margin-top: 10px;
        }
        th{
            background-color: #f8f9fa;
            color:#333;

        }
        tr:nth-child(even){
            background-color: #f9f9f9;
        }

    </style>
</head>
<body>
    <div class="header">
        <h1>Student Dashboard</h1>
    </div>
    <div class="container">
        <a href="index.html" class="btn"> ADD new Studnets</a>
        <h2>Registered Studnets</h2>
        <?php
        $con = mysqli_connect("localhost", "root", "", "college",3307);
        if(!$con){
            die("Connection faild".mysqli_connect_error());
        }
        $sql ="Select * from studentre";
        $result= mysqli_query($con, $sql);
        if(mysqli_num_rows($result)>0){
            echo "<table>
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Course</th>
                </tr>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>
                    <td>{$row['rollno']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['course']}</td>
                </tr>";
            }
            echo "</table>";
        }

        ?>
    

    </div>

    
</body>
</html>