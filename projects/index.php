<?php
$insert = false;
if(isset($_POST['name'])){

    $server = "localhost";
    $username = "root";
    $password = '';
    $database = "trip"; // 🔁 Replace with your actual DB name
    $port = 3307; // ⛳️ Only if you're using port 3307 in XAMPP

    // If you're using port 3307, specify it
    $con = mysqli_connect($server, $username, $password, $database, $port);

    // Connection check
    if (!$con) {
        die("Connection to this database failed due to: " . mysqli_connect_error());
    }

    //echo "Success to DB";
    $name = $_POST['name'];
    $gender = $_POST['gender'] ;
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip` (`name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;


    if ($con->query($sql) === true) {
            $insert = true;

    // echo "Successfully inserted";

    } else {
        echo "ERROR: $sql <br> " . $con->error;
        
    }
    $con->close();



}


?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Ravel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h1>Welcome to GItam US trip form</h1>
        <p>Enter your details to confirm your particiation in th trip</p>
        <?php

        if($insert == true){
            echo "<p class='submiting'>Thanks for submitting this form</p>";
        }


        
        ?>    
    <form action="index.php" method="post">

        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your Age">
        <input type="text" name="gender" id="gender" placeholder="Enter your Gender">
        <input type="email" name="email" id="email" placeholder="Enter your ESmail">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc"  cols="30" rows="10" placeholder="Enter any information"></textarea>
        <button class="btn">Submit</button>
        <!-- <button class="btn">Reset</button> -->



    </form>


    </div>
    
</body>
<script src="index.js"></script>
</html>



